# CustomsDocumentBatchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_id** | **string** | Unique identifier for this batch of uploaded customs documents. Provide this value in the &#39;&#39;paperlessCustoms&#39;&#39; service attribute of POST /orders to attach the documents to a shipment. A batchId can only be consumed by one shipment. |
**documents** | [**\Dhl\Rest\Shipping\Model\CustomsDocumentReference[]**](CustomsDocumentReference.md) | The accepted documents of this batch. | [optional]
**validation_messages** | [**\Dhl\Rest\Shipping\Model\ValidationMessageItem[]**](ValidationMessageItem.md) | Optional warnings for the batch, for example truncated field values. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
