# OpenAPI\Client\UsersApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**meGet()**](UsersApi.md#meGet) | **GET** /me | Get the authorised user |
| [**usersIdGet()**](UsersApi.md#usersIdGet) | **GET** /users/{id} | Get user |
| [**usersIdPut()**](UsersApi.md#usersIdPut) | **PUT** /users/{id} | Update user |


## `meGet()`

```php
meGet(): \OpenAPI\Client\Model\User
```

Get the authorised user

Gets the user that corresponds to the access token used in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->meGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->meGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdGet()`

```php
usersIdGet($id): \OpenAPI\Client\Model\User
```

Get user

Gets a user by ID. You must be authorised as the target user in order to make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.

try {
    $result = $apiInstance->usersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdPut()`

```php
usersIdPut($id, $users_id_put_request): \OpenAPI\Client\Model\User
```

Update user

Updates the user by their ID. You must be authorised as the target user in order to make this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.
$users_id_put_request = new \OpenAPI\Client\Model\UsersIdPutRequest(); // \OpenAPI\Client\Model\UsersIdPutRequest

try {
    $result = $apiInstance->usersIdPut($id, $users_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |
| **users_id_put_request** | [**\OpenAPI\Client\Model\UsersIdPutRequest**](../Model/UsersIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
