# CustomsDocumentUploadItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_type** | **string** | Type of the customs document. |
**user_defined_reference** | **string** | Optional customer-defined reference for the document, e.g. an order or file reference. Values exceeding 60 characters are truncated and result in a warning. | [optional]
**data** | **\SplFileObject** | The PDF file content. Only application/pdf is accepted. Maximum file size 1 MB, maximum filename length 60 characters. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
