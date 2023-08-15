# OpenAPI\Client\SavedSearchesApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersIdSavedSearchesGet()**](SavedSearchesApi.md#usersIdSavedSearchesGet) | **GET** /users/{id}/saved_searches | List saved searches in user |


## `usersIdSavedSearchesGet()`

```php
usersIdSavedSearchesGet($id): \OpenAPI\Client\Model\SavedSearch[]
```

List saved searches in user

Lists saved searches belonging to a user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SavedSearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.

try {
    $result = $apiInstance->usersIdSavedSearchesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedSearchesApi->usersIdSavedSearchesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |

### Return type

[**\OpenAPI\Client\Model\SavedSearch[]**](../Model/SavedSearch.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
