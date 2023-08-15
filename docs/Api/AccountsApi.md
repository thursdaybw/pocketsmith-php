# OpenAPI\Client\AccountsApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountsIdDelete()**](AccountsApi.md#accountsIdDelete) | **DELETE** /accounts/{id} | Delete account |
| [**accountsIdGet()**](AccountsApi.md#accountsIdGet) | **GET** /accounts/{id} | Get account |
| [**accountsIdPut()**](AccountsApi.md#accountsIdPut) | **PUT** /accounts/{id} | Update account |
| [**institutionsIdAccountsGet()**](AccountsApi.md#institutionsIdAccountsGet) | **GET** /institutions/{id}/accounts | List accounts in institution |
| [**usersIdAccountsGet()**](AccountsApi.md#usersIdAccountsGet) | **GET** /users/{id}/accounts | List accounts in user |
| [**usersIdAccountsPost()**](AccountsApi.md#usersIdAccountsPost) | **POST** /users/{id}/accounts | Create an account in user |
| [**usersIdAccountsPut()**](AccountsApi.md#usersIdAccountsPut) | **PUT** /users/{id}/accounts | Update the display order of accounts in user |


## `accountsIdDelete()`

```php
accountsIdDelete($id)
```

Delete account

Deletes an account and all its data by ID, optionally merge scenarios into another account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the account.

try {
    $apiInstance->accountsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the account. | |

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

## `accountsIdGet()`

```php
accountsIdGet($id): \OpenAPI\Client\Model\Account
```

Get account

Gets an account by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the account.

try {
    $result = $apiInstance->accountsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the account. | |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsIdPut()`

```php
accountsIdPut($id, $accounts_id_put_request): \OpenAPI\Client\Model\Account
```

Update account

Updates and returns an account by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the account.
$accounts_id_put_request = new \OpenAPI\Client\Model\AccountsIdPutRequest(); // \OpenAPI\Client\Model\AccountsIdPutRequest

try {
    $result = $apiInstance->accountsIdPut($id, $accounts_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the account. | |
| **accounts_id_put_request** | [**\OpenAPI\Client\Model\AccountsIdPutRequest**](../Model/AccountsIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `institutionsIdAccountsGet()`

```php
institutionsIdAccountsGet($id): \OpenAPI\Client\Model\Account[]
```

List accounts in institution

Lists accounts belonging to an institution by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the institution.

try {
    $result = $apiInstance->institutionsIdAccountsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->institutionsIdAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the institution. | |

### Return type

[**\OpenAPI\Client\Model\Account[]**](../Model/Account.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdAccountsGet()`

```php
usersIdAccountsGet($id): \OpenAPI\Client\Model\Account[]
```

List accounts in user

Lists all accounts belonging to the user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.

try {
    $result = $apiInstance->usersIdAccountsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->usersIdAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |

### Return type

[**\OpenAPI\Client\Model\Account[]**](../Model/Account.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdAccountsPost()`

```php
usersIdAccountsPost($id, $users_id_accounts_post_request): \OpenAPI\Client\Model\Account
```

Create an account in user

Creates and returns an account belonging to the user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.
$users_id_accounts_post_request = new \OpenAPI\Client\Model\UsersIdAccountsPostRequest(); // \OpenAPI\Client\Model\UsersIdAccountsPostRequest

try {
    $result = $apiInstance->usersIdAccountsPost($id, $users_id_accounts_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->usersIdAccountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |
| **users_id_accounts_post_request** | [**\OpenAPI\Client\Model\UsersIdAccountsPostRequest**](../Model/UsersIdAccountsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdAccountsPut()`

```php
usersIdAccountsPut($id, $users_id_accounts_put_request): \OpenAPI\Client\Model\Account[]
```

Update the display order of accounts in user

Updates the display order of accounts belonging to the user, by accepting an array of accounts in their new display order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.
$users_id_accounts_put_request = new \OpenAPI\Client\Model\UsersIdAccountsPutRequest(); // \OpenAPI\Client\Model\UsersIdAccountsPutRequest

try {
    $result = $apiInstance->usersIdAccountsPut($id, $users_id_accounts_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->usersIdAccountsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |
| **users_id_accounts_put_request** | [**\OpenAPI\Client\Model\UsersIdAccountsPutRequest**](../Model/UsersIdAccountsPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Account[]**](../Model/Account.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
