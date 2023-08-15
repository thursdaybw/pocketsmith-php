# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cheque_number** | **string** |  | [optional]
**type** | **string** | Whether the transaction is a debit or a credit | [optional]
**memo** | **string** |  | [optional]
**payee** | **string** | The payee/merchant of the transaction. | [optional]
**amount** | **float** |  | [optional]
**amount_in_base_currency** | **float** | The amount of the transaction in the user&#39;s base currency. | [optional]
**date** | **string** | The date the transaction took place. | [optional]
**is_transfer** | **bool** | Whether the transaction is a transfer. | [optional]
**category** | [**\OpenAPI\Client\Model\Category**](Category.md) |  | [optional]
**note** | **string** |  | [optional]
**labels** | **string[]** |  | [optional]
**id** | **int** | The unique identifier of the transaction. | [optional]
**original_payee** | **string** | The payee the transaction was created with. | [optional]
**upload_source** | **string** | Where the transaction came from. | [optional]
**closing_balance** | **float** | The closing balance of the account at the transaction. | [optional]
**transaction_account** | [**\OpenAPI\Client\Model\TransactionAccount**](TransactionAccount.md) |  | [optional]
**status** | **string** | The status of the transaction. Pending transactions are temporary and may be superseded later by their posted counterparts, which are permanent. | [optional]
**needs_review** | **bool** | Whether the transaction needs to be reviewed. | [optional]
**created_at** | **string** | When the transaction was created. | [optional]
**updated_at** | **string** | When the transaction was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
