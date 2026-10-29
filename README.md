# OpenAPIClient-php

Note: This is the specification of the DPDHL Group Parcel DE Shipping API for Post & Parcel Germany. This REST web service allows business customers to create shipping labels on demand.



## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/nogrod/dhl-shipping-php-sdk.git"
    }
  ],
  "require": {
    "nogrod/dhl-shipping-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api-eu.dhl.com/parcel/de/shipping/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomsDocumentsApi* | [**customsDocumentsPost**](docs/Api/CustomsDocumentsApi.md#customsdocumentspost) | **POST** /customs-documents | Upload customs documents for paperless customs clearance
*GeneralApi* | [**rootGet**](docs/Api/GeneralApi.md#rootget) | **GET** / | Return API version
*ManifestsApi* | [**getManifests**](docs/Api/ManifestsApi.md#getmanifests) | **GET** /manifests | Retrieve daily manifest document
*ManifestsApi* | [**manifestsPost**](docs/Api/ManifestsApi.md#manifestspost) | **POST** /manifests | Mark shipments as being ready for shipping
*ShipmentsAndLabelsApi* | [**createOrders**](docs/Api/ShipmentsAndLabelsApi.md#createorders) | **POST** /orders | Create one or more shipments and their documents. (This is the primary call of the API.)
*ShipmentsAndLabelsApi* | [**getLabel**](docs/Api/ShipmentsAndLabelsApi.md#getlabel) | **GET** /labels | Download PDF document
*ShipmentsAndLabelsApi* | [**getOrder**](docs/Api/ShipmentsAndLabelsApi.md#getorder) | **GET** /orders | Retrieve shipment documents - labels and customs documents
*ShipmentsAndLabelsApi* | [**ordersAccountDelete**](docs/Api/ShipmentsAndLabelsApi.md#ordersaccountdelete) | **DELETE** /orders | Delete one or more shipments

## Models

- [BankAccount](docs/Model/BankAccount.md)
- [BillingNoToSheetNo](docs/Model/BillingNoToSheetNo.md)
- [Commodity](docs/Model/Commodity.md)
- [Consignee](docs/Model/Consignee.md)
- [ContactAddress](docs/Model/ContactAddress.md)
- [Country](docs/Model/Country.md)
- [CustomsDetails](docs/Model/CustomsDetails.md)
- [CustomsDocumentBatchResponse](docs/Model/CustomsDocumentBatchResponse.md)
- [CustomsDocumentReference](docs/Model/CustomsDocumentReference.md)
- [CustomsDocumentUploadItem](docs/Model/CustomsDocumentUploadItem.md)
- [CustomsDocumentValidationItem](docs/Model/CustomsDocumentValidationItem.md)
- [CustomsDocumentValidationResponse](docs/Model/CustomsDocumentValidationResponse.md)
- [Dimensions](docs/Model/Dimensions.md)
- [Document](docs/Model/Document.md)
- [LabelDataResponse](docs/Model/LabelDataResponse.md)
- [Locker](docs/Model/Locker.md)
- [MultipleManifestResponse](docs/Model/MultipleManifestResponse.md)
- [POBox](docs/Model/POBox.md)
- [PostOffice](docs/Model/PostOffice.md)
- [Product](docs/Model/Product.md)
- [RequestStatus](docs/Model/RequestStatus.md)
- [ResponseItem](docs/Model/ResponseItem.md)
- [ServiceInformation](docs/Model/ServiceInformation.md)
- [ServiceInformationAmp](docs/Model/ServiceInformationAmp.md)
- [ServiceInformationBackend](docs/Model/ServiceInformationBackend.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentDetails](docs/Model/ShipmentDetails.md)
- [ShipmentManifestingRequest](docs/Model/ShipmentManifestingRequest.md)
- [ShipmentNoToSheetNo](docs/Model/ShipmentNoToSheetNo.md)
- [ShipmentOrderRequest](docs/Model/ShipmentOrderRequest.md)
- [ShipmentShipper](docs/Model/ShipmentShipper.md)
- [Shipper](docs/Model/Shipper.md)
- [ShipperReference](docs/Model/ShipperReference.md)
- [ShortResponseItem](docs/Model/ShortResponseItem.md)
- [SingleManifestResponse](docs/Model/SingleManifestResponse.md)
- [VAS](docs/Model/VAS.md)
- [VASCashOnDelivery](docs/Model/VASCashOnDelivery.md)
- [VASDhlRetoure](docs/Model/VASDhlRetoure.md)
- [VASIdentCheck](docs/Model/VASIdentCheck.md)
- [ValidationMessageItem](docs/Model/ValidationMessageItem.md)
- [Value](docs/Model/Value.md)
- [Weight](docs/Model/Weight.md)

## Authorization

### BasicAuth

- **Type**: HTTP basic authentication


### ApiKey

- **Type**: API key
- **API key parameter name**: dhl-api-key
- **Location**: HTTP header



### OAuth2

- **Type**: `OAuth`
- **Flow**: `password`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.2.0`
    - Generator version: `7.26.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
