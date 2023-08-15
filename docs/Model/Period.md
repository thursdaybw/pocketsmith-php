# # Period

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | **string** | The start date of the period. | [optional]
**end_date** | **string** | The end date of the period. | [optional]
**currency_code** | **string** | The currency of the period. | [optional]
**actual_amount** | **float** | The sum of all actuals (transactions) in the period. | [optional]
**forecast_amount** | **float** | The sum of all forecast sources (budget events) in the period, for comparison against the actual amount. | [optional]
**refund_amount** | **float** | This attribute tracks the amount that has been refunded or deducted to the actual amount. When a category is set to \&quot;always expense\&quot;, any credit transactions are treated as refunds and when set to \&quot;always income\&quot;, any debit transactions are treated as deductions. | [optional]
**current** | **bool** | Whether this period is current, such that the current date (in the user&#39;s time zone) falls within the date range. | [optional]
**over_budget** | **bool** | Whether the budget has been exceeded in the period. | [optional]
**under_budget** | **bool** | Whether the budget has not been exceeded in the period. | [optional]
**over_by** | **float** | How much the budget has been exceeded by in the period. | [optional]
**under_by** | **float** | How much there is left in the budget for the period. | [optional]
**percentage_used** | **float** | The percentage of the budget that has been used in the period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
