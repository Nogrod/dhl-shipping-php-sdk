#!/usr/bin/env php
<?php

/**
 * Downloads the current DHL "Parcel DE Shipping (Post & Parcel Germany) v2"
 * OpenAPI specification from the DHL developer portal and re-applies the local
 * corrections listed in specPatches().
 *
 * The portal stores the spec under a date-stamped path that changes with every
 * release (e.g. /sites/default/files/2026-05/parcel-de-shipping-v2.yaml), so the
 * API reference page is scraped for the current link instead of hard-coding it.
 *
 * Usage:
 *   php bin/download-spec.php [--check] [--raw] [--out=<file>] [--url=<direct spec url>]
 *
 *   --check   Do not write anything, only report whether the local spec is
 *             out of date. Exits with code 1 when an update is available.
 *   --raw     Write the unpatched upstream spec (for diffing against the patches).
 *   --out     Target file (default: parcel-de-shipping-v2.yaml in the repo root).
 *   --url     Skip page scraping and download this URL directly.
 */

declare(strict_types=1);

const PAGE_URL = 'https://developer.dhl.com/api-reference/parcel-de-shipping-post-parcel-germany-v2';
const BASE_URL = 'https://developer.dhl.com';
const USER_AGENT = 'dhl-shipping-php-sdk spec downloader';

$options = getopt('', ['check', 'raw', 'out::', 'url::']);
$check = array_key_exists('check', $options);
$raw = array_key_exists('raw', $options);
$target = $options['out'] ?? dirname(__DIR__) . '/parcel-de-shipping-v2.yaml';

try {
    $specUrl = isset($options['url']) && $options['url'] !== false
        ? (string) $options['url']
        : resolveSpecUrl(PAGE_URL);

    echo "Spec URL: {$specUrl}\n";

    $spec = httpGet($specUrl);
    assertLooksLikeSpec($spec, $specUrl);

    echo 'Remote version: ' . (specVersion($spec) ?? 'unknown') . "\n";

    if (!$raw) {
        $spec = applyPatches($spec);
    }

    if (is_file($target)) {
        $local = (string) file_get_contents($target);
        echo 'Local version:  ' . (specVersion($local) ?? 'unknown') . "\n";

        if ($local === $spec) {
            echo "Already up to date: {$target}\n";
            exit(0);
        }
    }

    if ($check) {
        fwrite(STDERR, "An updated specification is available.\n");
        exit(1);
    }

    if (file_put_contents($target, $spec) === false) {
        throw new RuntimeException("Unable to write {$target}");
    }

    echo 'Updated ' . $target . ' (' . strlen($spec) . " bytes)\n";
    echo "Run build.bat / the openapi-generator to regenerate the SDK.\n";
    exit(0);
} catch (Throwable $e) {
    fwrite(STDERR, 'Error: ' . $e->getMessage() . "\n");
    exit(2);
}

/**
 * Local corrections re-applied to every download, because DHL keeps shipping them and both
 * break the generated client against the API's actual behaviour:
 *
 *  - RequestStatus.statusCode is a deprecated duplicate of `status`, declared required but not
 *    reliably sent. Removed in 821bf6f ("remove deprecated field"), together with its entry in
 *    the schema's `required` list.
 *  - RequestStatus.detail carries maxLength: 80, which real responses exceed. Removed in
 *    a744776 ("update & fix").
 *
 * Each entry is a [pattern, replacement] pair that must change something. A patch that no
 * longer matches aborts the run, so an upstream restructuring cannot silently drop a fix.
 *
 * @return array<string,array{0:string,1:string}>
 */
function specPatches(): array
{
    return [
        // The whole deprecated property including its indented child lines.
        'remove RequestStatus.statusCode' => [
            '/^ {8}statusCode:[ \t]*\R(?: {10}\S.*\R)+/m',
            '',
        ],
        // The matching `required` entry, anchored to RequestStatus so an occurrence that DHL may
        // add to another schema later is left alone.
        'remove statusCode from RequestStatus.required' => [
            '/^( {4}RequestStatus:\R(?: {6,}.*\R)*? {6}required:\R(?: {8}- \S+[ \t]*\R)*?) {8}- statusCode[ \t]*\R/m',
            '$1',
        ],
        // Only the maxLength of `detail`; the same constraint is legitimate on other properties.
        'remove maxLength from RequestStatus.detail' => [
            '/^( {8}detail:[ \t]*\R) {10}maxLength: 80[ \t]*\R/m',
            '$1',
        ],
    ];
}

function applyPatches(string $spec): string
{
    foreach (specPatches() as $label => [$pattern, $replacement]) {
        $patched = preg_replace($pattern, $replacement, $spec, 1, $count);

        if ($patched === null) {
            throw new RuntimeException("Patch '{$label}' failed: " . preg_last_error_msg());
        }

        if ($count === 0) {
            throw new RuntimeException(
                "Patch '{$label}' no longer applies to the downloaded specification. Nothing was "
                . 'written. Check whether DHL fixed this upstream (then drop the patch from '
                . 'specPatches()) or only restructured the schema (then adjust the pattern). '
                . 'Use --raw to inspect the unpatched spec.'
            );
        }

        echo "Patched: {$label}\n";
        $spec = $patched;
    }

    return $spec;
}

/**
 * Scrapes the API reference page for the newest date-stamped spec link.
 */
function resolveSpecUrl(string $pageUrl): string
{
    $html = httpGet($pageUrl);

    $pattern = '#(?:https://developer\.dhl\.com)?/sites/default/files/(\d{4}-\d{2})/[^"\'\s<>]*parcel-de-shipping-v2\.ya?ml#i';
    if (!preg_match_all($pattern, $html, $matches, PREG_SET_ORDER)) {
        throw new RuntimeException(
            "No spec download link found on {$pageUrl}. The portal layout may have changed; "
            . 'pass the link from the downloads section via --url=<url>.'
        );
    }

    // Several revisions may be linked; the newest date-stamped folder wins.
    usort($matches, static fn (array $a, array $b): int => strcmp($a[1], $b[1]));
    $url = end($matches)[0];

    return str_starts_with($url, 'http') ? $url : BASE_URL . $url;
}

function httpGet(string $url): string
{
    $ch = curl_init($url);
    if ($ch === false) {
        throw new RuntimeException('Unable to initialize curl');
    }

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS => 5,
        CURLOPT_CONNECTTIMEOUT => 15,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_USERAGENT => USER_AGENT,
        CURLOPT_HTTPHEADER => ['Accept: */*'],
    ]);

    $body = curl_exec($ch);
    $error = curl_error($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    unset($ch);

    if ($body === false) {
        throw new RuntimeException("Request to {$url} failed: {$error}");
    }

    if ($status < 200 || $status >= 300) {
        throw new RuntimeException("Request to {$url} returned HTTP {$status}");
    }

    return (string) $body;
}

function assertLooksLikeSpec(string $spec, string $url): void
{
    if (!preg_match('/^\s*openapi:/m', $spec) || !str_contains($spec, 'parcel/de/shipping')) {
        throw new RuntimeException("The content downloaded from {$url} is not the expected OpenAPI specification.");
    }
}

function specVersion(string $spec): ?string
{
    return preg_match('/^\s{2}version:\s*(\S+)/m', $spec, $m) ? $m[1] : null;
}
