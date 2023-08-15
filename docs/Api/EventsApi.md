# OpenAPI\Client\EventsApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventsIdDelete()**](EventsApi.md#eventsIdDelete) | **DELETE** /events/{id} | Delete event |
| [**eventsIdGet()**](EventsApi.md#eventsIdGet) | **GET** /events/{id} | Get event |
| [**eventsIdPut()**](EventsApi.md#eventsIdPut) | **PUT** /events/{id} | Update event |
| [**scenariosIdEventsGet()**](EventsApi.md#scenariosIdEventsGet) | **GET** /scenarios/{id}/events | List events in scenario. |
| [**scenariosIdEventsPost()**](EventsApi.md#scenariosIdEventsPost) | **POST** /scenarios/{id}/events | Create event in scenario |
| [**usersIdEventsGet()**](EventsApi.md#usersIdEventsGet) | **GET** /users/{id}/events | List events in user. |


## `eventsIdDelete()`

```php
eventsIdDelete($id, $behaviour)
```

Delete event

Deletes an event by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42-1601942400; // string | The unique identifier of the event.
$behaviour = 'behaviour_example'; // string | Whether the delete applies only to this event, to all events within the series from this event or to all events within the series.

try {
    $apiInstance->eventsIdDelete($id, $behaviour);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The unique identifier of the event. | |
| **behaviour** | **string**| Whether the delete applies only to this event, to all events within the series from this event or to all events within the series. | |

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

## `eventsIdGet()`

```php
eventsIdGet($id): \OpenAPI\Client\Model\Event
```

Get event

Gets a particular event by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42-1601942400; // string | The unique identifier of the event.

try {
    $result = $apiInstance->eventsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The unique identifier of the event. | |

### Return type

[**\OpenAPI\Client\Model\Event**](../Model/Event.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsIdPut()`

```php
eventsIdPut($id, $events_id_put_request): \OpenAPI\Client\Model\Event
```

Update event

Updates an event by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42-1601942400; // string | The unique identifier of the event.
$events_id_put_request = new \OpenAPI\Client\Model\EventsIdPutRequest(); // \OpenAPI\Client\Model\EventsIdPutRequest

try {
    $result = $apiInstance->eventsIdPut($id, $events_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The unique identifier of the event. | |
| **events_id_put_request** | [**\OpenAPI\Client\Model\EventsIdPutRequest**](../Model/EventsIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Event**](../Model/Event.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scenariosIdEventsGet()`

```php
scenariosIdEventsGet($id, $start_date, $end_date): \OpenAPI\Client\Model\Event[]
```

List events in scenario.

Lists events belonging to a scenario by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the scenario.
$start_date = 2020-10-01; // string | Return the events from and including this date.
$end_date = 2020-10-30; // string | Return the events until and including this date.

try {
    $result = $apiInstance->scenariosIdEventsGet($id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->scenariosIdEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the scenario. | |
| **start_date** | **string**| Return the events from and including this date. | |
| **end_date** | **string**| Return the events until and including this date. | |

### Return type

[**\OpenAPI\Client\Model\Event[]**](../Model/Event.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scenariosIdEventsPost()`

```php
scenariosIdEventsPost($id, $scenarios_id_events_post_request): \OpenAPI\Client\Model\Event
```

Create event in scenario

Creates an event in a scenario by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the scenario.
$scenarios_id_events_post_request = new \OpenAPI\Client\Model\ScenariosIdEventsPostRequest(); // \OpenAPI\Client\Model\ScenariosIdEventsPostRequest

try {
    $result = $apiInstance->scenariosIdEventsPost($id, $scenarios_id_events_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->scenariosIdEventsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the scenario. | |
| **scenarios_id_events_post_request** | [**\OpenAPI\Client\Model\ScenariosIdEventsPostRequest**](../Model/ScenariosIdEventsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Event**](../Model/Event.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdEventsGet()`

```php
usersIdEventsGet($id, $start_date, $end_date): \OpenAPI\Client\Model\Event[]
```

List events in user.

Lists events belonging to a user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.
$start_date = 2020-10-01; // string | Return the events from and including this date.
$end_date = 2020-10-30; // string | Return the events until and including this date.

try {
    $result = $apiInstance->usersIdEventsGet($id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->usersIdEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |
| **start_date** | **string**| Return the events from and including this date. | |
| **end_date** | **string**| Return the events until and including this date. | |

### Return type

[**\OpenAPI\Client\Model\Event[]**](../Model/Event.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
