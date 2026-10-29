# Dhl\Rest\Shipping\CustomsDocumentsApi

All URIs are relative to https://api-eu.dhl.com/parcel/de/shipping/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customsDocumentsPost()**](CustomsDocumentsApi.md#customsDocumentsPost) | **POST** /customs-documents | Upload customs documents for paperless customs clearance |


## `customsDocumentsPost()`

```php
customsDocumentsPost($documents, $accept_language): \Dhl\Rest\Shipping\Model\CustomsDocumentBatchResponse
```

Upload customs documents for paperless customs clearance

Uploads customs-related invoice documents (commercial invoice or proforma invoice) for international shipments.  Documents must be uploaded before shipment creation (`POST /orders`). The response contains a `batchId` which must be provided when creating the corresponding shipment.  Uploaded documents may be used for paperless customs clearance (`paperlessCustoms`) or to fulfill country-specific requirements for electronic invoice submission, where customs authorities require a digital copy of the invoice in addition to customs data and accompanying paper documents.  A `batchId` can only be used for a single shipment. Reusing a `batchId` that has already been linked to a shipment results in an error.  Only PDF documents are accepted. Each file may not exceed 1 MB and the filename must not exceed 60 characters. Up to 4 documents can be uploaded per request. Uploaded but unused documents are automatically deleted after a retention period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Dhl\Rest\Shipping\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKey
$config = Dhl\Rest\Shipping\Configuration::getDefaultConfiguration()->setApiKey('dhl-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dhl\Rest\Shipping\Configuration::getDefaultConfiguration()->setApiKeyPrefix('dhl-api-key', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Dhl\Rest\Shipping\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Dhl\Rest\Shipping\Api\CustomsDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documents = array(new \Dhl\Rest\Shipping\Model\\Dhl\Rest\Shipping\Model\CustomsDocumentUploadItem()); // \Dhl\Rest\Shipping\Model\CustomsDocumentUploadItem[] | List of customs documents to upload. Submitted as multipart form fields using bracket notation, e.g. documents[0].documentType, documents[0].userDefinedReference, documents[0].data, documents[1]...
$accept_language = de-DE; // string | Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english.

try {
    $result = $apiInstance->customsDocumentsPost($documents, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomsDocumentsApi->customsDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documents** | [**\Dhl\Rest\Shipping\Model\CustomsDocumentUploadItem[]**](../Model/\Dhl\Rest\Shipping\Model\CustomsDocumentUploadItem.md)| List of customs documents to upload. Submitted as multipart form fields using bracket notation, e.g. documents[0].documentType, documents[0].userDefinedReference, documents[0].data, documents[1]... | |
| **accept_language** | **string**| Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english. | [optional] |

### Return type

[**\Dhl\Rest\Shipping\Model\CustomsDocumentBatchResponse**](../Model/CustomsDocumentBatchResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [ApiKey](../../README.md#ApiKey), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
