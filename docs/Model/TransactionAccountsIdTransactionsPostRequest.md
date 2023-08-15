# # TransactionAccountsIdTransactionsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payee** | **string** | The payee/merchant of the transaction. |
**amount** | **float** | The amount of the transaction. A positive amount is a credit, and a negative amount is a debit. |
**date** | **string** | The date when the transaction occurred. |
**is_transfer** | **bool** | Whether the transaction should be indicated as a transfer. | [optional]
**labels** | **string** | A set of comma-separated labels for the transaction. | [optional]
**category_id** | **int** | The unique identifier of a category for the transaction. | [optional]
**note** | **string** | A note for the transaction. | [optional]
**memo** | **string** | A memo for the transaction. | [optional]
**cheque_number** | **string** | A cheque number for the transaction. | [optional]
**needs_review** | **bool** | Whether the transaction needs to be reviewed or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
