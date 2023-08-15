# # Scenario

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the scenario. | [optional]
**title** | **string** | The title of the scenario. | [optional]
**description** | **string** | A short description of what the scenario is modelling. | [optional]
**interest_rate** | **float** | The amount of interest to apply to the balance. Will apply periodically depending on what &#x60;interest_rate_repeat_id&#x60; is set to. | [optional]
**interest_rate_repeat_id** | **int** | A number representing how often the interest should be applied. 0 is used for no interest, 2 is weekly, 3 is fortnightly, 4 is monthly, 5 is yearly and 7 for quarterly. | [optional]
**type** | **string** | The type of the scenario. | [optional]
**minimum_value** | **float** |  | [optional]
**maximum_value** | **float** |  | [optional]
**achieve_date** | **string** | For goals, the date that they should be achieved by. | [optional]
**starting_balance** | **float** | The starting balance of the scenario. | [optional]
**starting_balance_date** | **string** | The date of the starting balance. | [optional]
**closing_balance** | **float** | The closing balance of the scenario. | [optional]
**closing_balance_date** | **string** | The date of the closing balance. | [optional]
**current_balance** | **float** | The current balance of the scenario. | [optional]
**current_balance_date** | **string** | The date of the current balance. | [optional]
**current_balance_in_base_currency** | **float** | The current balance of the scenario in the user&#39;s base currency. | [optional]
**current_balance_exchange_rate** | **float** | The exchange rate between the scenario&#39;s currency and the user&#39;s base currency, when different. If the currencies are the same, null is returned. | [optional]
**safe_balance** | **float** | The current safe balance in the user&#39;s base currency, if safe balance is activated on the account associated with the scenario. If safe balance is not activated, then null is returned. | [optional]
**safe_balance_in_base_currency** | **float** | The current safe balance in the user&#39;s base currency, if safe balance is activated on the account associated with the scenario. If safe balance is not available, then null is returned. | [optional]
**created_at** | **string** | When the scenario was created. | [optional]
**updated_at** | **string** | When the scenario was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
