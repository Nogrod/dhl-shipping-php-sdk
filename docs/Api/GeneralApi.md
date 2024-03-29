# Dhl\Rest\Shipping\GeneralApi

All URIs are relative to https://api-eu.dhl.com/parcel/de/shipping/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rootGet()**](GeneralApi.md#rootGet) | **GET** / | Return API version |


## `rootGet()`

```php
rootGet(): \Dhl\Rest\Shipping\Model\ServiceInformation
```

Return API version

Returns the current version of the API as major.minor.patch. Furthermore, it will also return more details (semantic version number, revision, environment) of the API layer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Dhl\Rest\Shipping\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->rootGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->rootGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dhl\Rest\Shipping\Model\ServiceInformation**](../Model/ServiceInformation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
