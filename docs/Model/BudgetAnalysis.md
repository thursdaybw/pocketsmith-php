# # BudgetAnalysis

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | **string** | The start date of the budget analysis. | [optional]
**end_date** | **string** | The end date of the budget analysis. | [optional]
**currency_code** | **string** | The currency of the budget analysis. | [optional]
**total_actual_amount** | **float** | The total actual (transactions) amount across all periods. | [optional]
**average_actual_amount** | **float** | The average actual (transactions) amount across all periods. | [optional]
**total_forecast_amount** | **float** | The total budgeted amount across all periods. | [optional]
**average_forecast_amount** | **float** | The average budgeted amount across all periods. | [optional]
**total_over_by** | **float** | The total amount the budget was exceeded across all periods. | [optional]
**total_under_by** | **float** | The total amount the budget was under by across all periods. | [optional]
**periods** | [**\OpenAPI\Client\Model\Period[]**](Period.md) | The period analyses that this budget analysis comprises. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
