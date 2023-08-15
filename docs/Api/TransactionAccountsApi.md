# OpenAPI\Client\TransactionAccountsApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**transactionAccountsIdGet()**](TransactionAccountsApi.md#transactionAccountsIdGet) | **GET** /transaction_accounts/{id} | Get transaction account |
| [**transactionAccountsIdPut()**](TransactionAccountsApi.md#transactionAccountsIdPut) | **PUT** /transaction_accounts/{id} | Update transaction account |
| [**usersIdTransactionAccountsGet()**](TransactionAccountsApi.md#usersIdTransactionAccountsGet) | **GET** /users/{id}/transaction_accounts | List transaction accounts in user |


## `transactionAccountsIdGet()`

```php
transactionAccountsIdGet($id): \OpenAPI\Client\Model\TransactionAccount
```

Get transaction account

Gets a transaction account by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the transaction account.

try {
    $result = $apiInstance->transactionAccountsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionAccountsApi->transactionAccountsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction account. | |

### Return type

[**\OpenAPI\Client\Model\TransactionAccount**](../Model/TransactionAccount.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionAccountsIdPut()`

```php
transactionAccountsIdPut($id, $transaction_accounts_id_put_request): \OpenAPI\Client\Model\TransactionAccount
```

Update transaction account

Updates the transaction account by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the transaction account.
$transaction_accounts_id_put_request = new \OpenAPI\Client\Model\TransactionAccountsIdPutRequest(); // \OpenAPI\Client\Model\TransactionAccountsIdPutRequest

try {
    $result = $apiInstance->transactionAccountsIdPut($id, $transaction_accounts_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionAccountsApi->transactionAccountsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction account. | |
| **transaction_accounts_id_put_request** | [**\OpenAPI\Client\Model\TransactionAccountsIdPutRequest**](../Model/TransactionAccountsIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransactionAccount**](../Model/TransactionAccount.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdTransactionAccountsGet()`

```php
usersIdTransactionAccountsGet($id): \OpenAPI\Client\Model\TransactionAccount[]
```

List transaction accounts in user

List all transaction accounts belonging to a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.

try {
    $result = $apiInstance->usersIdTransactionAccountsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionAccountsApi->usersIdTransactionAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |

### Return type

[**\OpenAPI\Client\Model\TransactionAccount[]**](../Model/TransactionAccount.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
