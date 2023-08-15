# # TransactionAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**number** | **string** |  | [optional]
**current_balance** | **float** |  | [optional]
**current_balance_date** | **string** |  | [optional]
**current_balance_in_base_currency** | **float** | The current balance of the transaction account in the user&#39;s base currency. | [optional]
**current_balance_exchange_rate** | **float** | The exchange rate between the transaction account&#39;s currency and the user&#39;s base currency, when different. If the currencies are the same, null is returned. | [optional]
**safe_balance** | **float** | The current safe balance, if safe balance is activated and available for the transaction account. If safe balance is not available, then null is returned. | [optional]
**safe_balance_in_base_currency** | **float** | The current safe balance in the user&#39;s base currency, if safe balance is activated and available for the transaction account. If safe balance is not available, then null is returned. | [optional]
**starting_balance** | **float** |  | [optional]
**starting_balance_date** | **string** |  | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]
**institution** | [**\OpenAPI\Client\Model\Institution**](Institution.md) |  | [optional]
**currency_code** | **string** | The currency that the account is in. This is determined by the account that the transaction account belongs to. | [optional]
**type** | **string** | The type of the transaction account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
