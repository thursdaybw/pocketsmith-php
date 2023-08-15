# # Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the account. | [optional]
**title** | **string** | The title of the account. | [optional]
**currency_code** | **string** | The currency code for the account. | [optional]
**type** | **string** | The type of the account. | [optional]
**is_net_worth** | **bool** | Whether the account is a net worth asset. | [optional]
**primary_transaction_account** | [**\OpenAPI\Client\Model\TransactionAccount**](TransactionAccount.md) |  | [optional]
**primary_scenario** | [**\OpenAPI\Client\Model\Scenario**](Scenario.md) |  | [optional]
**transaction_accounts** | [**\OpenAPI\Client\Model\TransactionAccount[]**](TransactionAccount.md) | All transaction accounts that compose the account, including the primary. | [optional]
**scenarios** | [**\OpenAPI\Client\Model\Scenario[]**](Scenario.md) | All scenarios that compose the account, including the primary. | [optional]
**created_at** | **string** | When the account was created. | [optional]
**updated_at** | **string** | When the account was last updated. | [optional]
**current_balance** | **float** | The current balance of the account. | [optional]
**current_balance_date** | **string** | The date of the current balance. | [optional]
**current_balance_in_base_currency** | **float** | The current balance of the account in the user&#39;s base currency. | [optional]
**current_balance_exchange_rate** | **float** | The exchange rate between the account&#39;s currency and the user&#39;s base currency, when different. If the currencies are the same, null is returned. | [optional]
**safe_balance** | **float** | The current safe balance, if safe balance is activated on the account. If safe balance is not activated, then null is returned. | [optional]
**safe_balance_in_base_currency** | **float** | The current safe balance in the user&#39;s base currency, if safe balance is activated on the account. If safe balance is not activated, then null is returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
