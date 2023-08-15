# OpenAPI\Client\BudgetingApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersIdBudgetGet()**](BudgetingApi.md#usersIdBudgetGet) | **GET** /users/{id}/budget | List budget for user |
| [**usersIdBudgetSummaryGet()**](BudgetingApi.md#usersIdBudgetSummaryGet) | **GET** /users/{id}/budget_summary | Get budget summary for user |
| [**usersIdForecastCacheDelete()**](BudgetingApi.md#usersIdForecastCacheDelete) | **DELETE** /users/{id}/forecast_cache | Delete forecast cache for user |
| [**usersIdTrendAnalysisGet()**](BudgetingApi.md#usersIdTrendAnalysisGet) | **GET** /users/{id}/trend_analysis | Get trend analysis for user |


## `usersIdBudgetGet()`

```php
usersIdBudgetGet($id, $roll_up): \OpenAPI\Client\Model\BudgetAnalysisPackage[]
```

List budget for user

Lists the user's budget, consisting of one or more budget analysis packages, one per category. Akin to the list on the Budget page in PocketSmith.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BudgetingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the account.
$roll_up = true; // bool | Whether parent categories should have their children rolled up into them. When used, the children will still appear in the collection on their own, but their actual and forecast figures will be rolled up to the root parent.

try {
    $result = $apiInstance->usersIdBudgetGet($id, $roll_up);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetingApi->usersIdBudgetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the account. | |
| **roll_up** | **bool**| Whether parent categories should have their children rolled up into them. When used, the children will still appear in the collection on their own, but their actual and forecast figures will be rolled up to the root parent. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BudgetAnalysisPackage[]**](../Model/BudgetAnalysisPackage.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdBudgetSummaryGet()`

```php
usersIdBudgetSummaryGet($id, $period, $interval, $start_date, $end_date): \OpenAPI\Client\Model\BudgetAnalysisPackage[]
```

Get budget summary for user

Get the user's budget summary, containing an expense and income analysis for all categories (excluding transfer categories) for the given period and date range. Akin to the overall budget shown on the Budget page in PocketSmith.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BudgetingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.
$period = weeks; // string | The period to analyse in, one of `weeks`, `months` or `years`. Also supported is `event`, although event period analysis is only possible when the budget events gathered align, so in this case where all categories are analysed together, it's highly unlikely that event period analysis will be possible.
$interval = 2; // int | The period interval, e.g. if the interval is 2 and the period is weeks, the budget will be analysed fortnightly.
$start_date = 2016-11-01; // string | The date to start analysing the budget from. This will be bumped out to make full periods as necessary.
$end_date = 2016-11-30; // string | The date to stop analysing the budget from. This will be bumped out to make full periods as necessary.

try {
    $result = $apiInstance->usersIdBudgetSummaryGet($id, $period, $interval, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetingApi->usersIdBudgetSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |
| **period** | **string**| The period to analyse in, one of &#x60;weeks&#x60;, &#x60;months&#x60; or &#x60;years&#x60;. Also supported is &#x60;event&#x60;, although event period analysis is only possible when the budget events gathered align, so in this case where all categories are analysed together, it&#39;s highly unlikely that event period analysis will be possible. | |
| **interval** | **int**| The period interval, e.g. if the interval is 2 and the period is weeks, the budget will be analysed fortnightly. | |
| **start_date** | **string**| The date to start analysing the budget from. This will be bumped out to make full periods as necessary. | |
| **end_date** | **string**| The date to stop analysing the budget from. This will be bumped out to make full periods as necessary. | |

### Return type

[**\OpenAPI\Client\Model\BudgetAnalysisPackage[]**](../Model/BudgetAnalysisPackage.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdForecastCacheDelete()`

```php
usersIdForecastCacheDelete($id)
```

Delete forecast cache for user

Delete the user's cached forecast by recalculating the forecast.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BudgetingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.

try {
    $apiInstance->usersIdForecastCacheDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BudgetingApi->usersIdForecastCacheDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |

### Return type

void (empty response body)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdTrendAnalysisGet()`

```php
usersIdTrendAnalysisGet($id, $period, $interval, $start_date, $end_date, $categories, $scenarios): \OpenAPI\Client\Model\BudgetAnalysisPackage[]
```

Get trend analysis for user

Get an income and/or expense budget analysis for the given date range and period across any number of categories and scenarios. Akin to the Trends page in PocketSmith.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BudgetingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.
$period = weeks; // string | The period to analyse in, one of `weeks`, `months` or `years`. Also supported is `event`, although event period analysis is only possible when the budget events gathered align, so in this case where all categories are analysed together, it's highly unlikely that event period analysis will be possible.
$interval = true; // int | The period interval, e.g. if the interval is 2 and the period is weeks, the budget will be analysed fortnightly.
$start_date = 2016-11-01; // string | The date to start analysing the budget from. This will be bumped out to make full periods as necessary.
$end_date = 2016-11-30; // string | The date to stop analysing the budget from. This will be bumped out to make full periods as necessary.
$categories = 42,49; // string | A comma-separated list of category IDs to analyse.
$scenarios = 11,29; // string | A comma-separated list of scenario IDs to analyse. You're likely going to want to include all a user's scenarios here, unless you have reason to only analyse for a subset of scenarios. Regardless of what scenarios are analysed, all actuals (transactions) across all accounts will be included.

try {
    $result = $apiInstance->usersIdTrendAnalysisGet($id, $period, $interval, $start_date, $end_date, $categories, $scenarios);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetingApi->usersIdTrendAnalysisGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |
| **period** | **string**| The period to analyse in, one of &#x60;weeks&#x60;, &#x60;months&#x60; or &#x60;years&#x60;. Also supported is &#x60;event&#x60;, although event period analysis is only possible when the budget events gathered align, so in this case where all categories are analysed together, it&#39;s highly unlikely that event period analysis will be possible. | |
| **interval** | **int**| The period interval, e.g. if the interval is 2 and the period is weeks, the budget will be analysed fortnightly. | |
| **start_date** | **string**| The date to start analysing the budget from. This will be bumped out to make full periods as necessary. | |
| **end_date** | **string**| The date to stop analysing the budget from. This will be bumped out to make full periods as necessary. | |
| **categories** | **string**| A comma-separated list of category IDs to analyse. | |
| **scenarios** | **string**| A comma-separated list of scenario IDs to analyse. You&#39;re likely going to want to include all a user&#39;s scenarios here, unless you have reason to only analyse for a subset of scenarios. Regardless of what scenarios are analysed, all actuals (transactions) across all accounts will be included. | |

### Return type

[**\OpenAPI\Client\Model\BudgetAnalysisPackage[]**](../Model/BudgetAnalysisPackage.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
