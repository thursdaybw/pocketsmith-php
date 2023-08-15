# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the user. | [optional]
**login** | **string** | The user&#39;s username. | [optional]
**name** | **string** | The full name of the user, although not all users will have a name set. | [optional]
**email** | **string** | The user&#39;s email address. | [optional]
**avatar_url** | **string** | The URL to the user&#39;s avatar. | [optional]
**beta_user** | **bool** | Whether the user has opted in to beta features. | [optional]
**time_zone** | **string** | The user&#39;s time zone. | [optional]
**week_start_day** | **int** | The day of the week the user wishes their calendars to start on. A number between 0 and 6, where 0 is Sunday and 6 is Saturday. | [optional]
**is_reviewing_transactions** | **bool** | Whether the user wants to review new transactions, transfer transactions or categorisation. | [optional]
**base_currency_code** | **string** | The user&#39;s base currency. | [optional]
**always_show_base_currency** | **bool** | Whether the user wants to see all accounts in their base currency instead of the native account currency. | [optional]
**using_multiple_currencies** | **bool** | Whether the user has multiple currencies in use across their account. | [optional]
**available_accounts** | **int** | The user&#39;s total number of available accounts. | [optional]
**available_budgets** | **int** | The user&#39;s total number of available budgets. | [optional]
**forecast_last_updated_at** | **string** | When the user&#39;s forecast was last updated. | [optional]
**forecast_last_accessed_at** | **string** | When the user&#39;s forecast was last accessed. | [optional]
**forecast_start_date** | **string** | The date that the user&#39;s forecast starts. | [optional]
**forecast_end_date** | **string** | The date that the user&#39;s forecast ends. | [optional]
**forecast_defer_recalculate** | **bool** | Whether the user&#39;s forecast recalculation should be deferred. | [optional]
**forecast_needs_recalculate** | **bool** | Whether the user&#39;s forecast needs to be recalculated. | [optional]
**last_logged_in_at** | **string** | When the user last logged into PocketSmith. | [optional]
**last_activity_at** | **string** | When the user last interacted with PocketSmith, via any application or the API. | [optional]
**created_at** | **string** | When the user signed up. | [optional]
**updated_at** | **string** | When the user was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
