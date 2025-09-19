# # ResponseItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_no** | **string** |  | [optional]
**routing_code** | **string** | Routing code of the consignee address | [optional]
**return_routing_code** | **string** | Routing code of the return address | [optional]
**return_shipment_no** | **string** |  | [optional]
**sstatus** | [**\Dhl\Rest\Shipping\Model\RequestStatus**](RequestStatus.md) |  |
**shipment_ref_no** | **string** |  | [optional]
**label** | [**\Dhl\Rest\Shipping\Model\Document**](Document.md) |  | [optional]
**return_label** | [**\Dhl\Rest\Shipping\Model\Document**](Document.md) |  | [optional]
**customs_doc** | [**\Dhl\Rest\Shipping\Model\Document**](Document.md) |  | [optional]
**cod_label** | [**\Dhl\Rest\Shipping\Model\Document**](Document.md) |  | [optional]
**validation_messages** | [**\Dhl\Rest\Shipping\Model\ValidationMessageItem[]**](ValidationMessageItem.md) | Optional validation messages attached to the shipment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
