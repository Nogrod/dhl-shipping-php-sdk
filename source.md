https://developer.dhl.com/api-reference/parcel-de-shipping-post-parcel-germany-v2#downloads-section

Die aktuelle Spezifikation wird automatisch von dort geladen, inklusive der lokalen Patches
(siehe apis() in ..\_tools\dhl_fetch_spec.php):

    php ..\_tools\dhl_fetch_spec.php shipping            # herunterladen/aktualisieren
    php ..\_tools\dhl_fetch_spec.php shipping --check    # nur pruefen (Exit-Code 1 = Update vorhanden)
    php ..\_tools\dhl_fetch_spec.php shipping --raw      # ungepatchten Upstream-Stand schreiben
