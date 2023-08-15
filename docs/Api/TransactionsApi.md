# OpenAPI\Client\TransactionsApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountsIdTransactionsGet()**](TransactionsApi.md#accountsIdTransactionsGet) | **GET** /accounts/{id}/transactions | List transactions in account |
| [**categoriesIdTransactionsGet()**](TransactionsApi.md#categoriesIdTransactionsGet) | **GET** /categories/{id}/transactions | List transactions in categories |
| [**transactionAccountsIdTransactionsGet()**](TransactionsApi.md#transactionAccountsIdTransactionsGet) | **GET** /transaction_accounts/{id}/transactions | List transactions in transaction account |
| [**transactionAccountsIdTransactionsPost()**](TransactionsApi.md#transactionAccountsIdTransactionsPost) | **POST** /transaction_accounts/{id}/transactions | Create a transaction in transaction account |
| [**transactionsIdDelete()**](TransactionsApi.md#transactionsIdDelete) | **DELETE** /transactions/{id} | Delete transaction |
| [**transactionsIdGet()**](TransactionsApi.md#transactionsIdGet) | **GET** /transactions/{id} | Get a transaction |
| [**transactionsIdPut()**](TransactionsApi.md#transactionsIdPut) | **PUT** /transactions/{id} | Update a transaction |
| [**usersIdTransactionsGet()**](TransactionsApi.md#usersIdTransactionsGet) | **GET** /users/{id}/transactions | List transactions in user |


## `accountsIdTransactionsGet()`

```php
accountsIdTransactionsGet($id, $start_date, $end_date, $updated_since, $uncategorised, $type, $needs_review, $search, $page): \OpenAPI\Client\Model\Transaction[]
```

List transactions in account

Lists transactions belonging to an account by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the account.
$start_date = 2016-11-01; // string | Limit to transactions on or after this date. Required if end_date is provided. If not provided, defaults to the furtherest date allowed by the user's subscription.
$end_date = 2016-11-30; // string | Limit to transactions on or before this date. Required if start_date is provided. If not provided, defaults to today's date.
$updated_since = 2020-10-14T09:20:33+13:00; // string | Limit to transactions updated since an ISO 8601 timestamp.
$uncategorised = 1; // int | Limit to uncategorised transactions.
$type = debit; // string | Limit to transactions of this type.
$needs_review = 1; // int | Limit to transactions that need to be reviewed.
$search = Paypal; // string | Limit to transactions matching a keyword search string. The provided string is matched against the transaction amount, account name, payee, category title, note, labels, and the date in ISO 8601 format.
$page = 3; // int | Choose a particular page of the results.

try {
    $result = $apiInstance->accountsIdTransactionsGet($id, $start_date, $end_date, $updated_since, $uncategorised, $type, $needs_review, $search, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->accountsIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the account. | |
| **start_date** | **string**| Limit to transactions on or after this date. Required if end_date is provided. If not provided, defaults to the furtherest date allowed by the user&#39;s subscription. | [optional] |
| **end_date** | **string**| Limit to transactions on or before this date. Required if start_date is provided. If not provided, defaults to today&#39;s date. | [optional] |
| **updated_since** | **string**| Limit to transactions updated since an ISO 8601 timestamp. | [optional] |
| **uncategorised** | **int**| Limit to uncategorised transactions. | [optional] |
| **type** | **string**| Limit to transactions of this type. | [optional] |
| **needs_review** | **int**| Limit to transactions that need to be reviewed. | [optional] |
| **search** | **string**| Limit to transactions matching a keyword search string. The provided string is matched against the transaction amount, account name, payee, category title, note, labels, and the date in ISO 8601 format. | [optional] |
| **page** | **int**| Choose a particular page of the results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesIdTransactionsGet()`

```php
categoriesIdTransactionsGet($id, $start_date, $end_date, $updated_since, $uncategorised, $type, $needs_review, $search, $page): \OpenAPI\Client\Model\Transaction[]
```

List transactions in categories

Lists transactions belonging to one or more categories by their IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42,43; // string | A comma-separated list of category IDs.
$start_date = 2016-11-01; // string | Limit to transactions on or after this date. Required if end_date is provided. If not provided, defaults to the furtherest date allowed by the user's subscription.
$end_date = 2016-11-30; // string | Limit to transactions on or before this date. Required if start_date is provided. If not provided, defaults to today's date.
$updated_since = 2020-10-14T09:20:33+13:00; // string | Limit to transactions updated since an ISO 8601 timestamp.
$uncategorised = 1; // int | Limit to uncategorised transactions.
$type = debit; // string | Limit to transactions of this type.
$needs_review = 1; // int | Limit to transactions that need to be reviewed.
$search = Paypal; // string | Limit to transactions matching a keyword search string. The provided string is matched against the transaction amount, account name, payee, category title, note, labels, and the date in ISO 8601 format.
$page = 3; // int | Choose a particular page of the results.

try {
    $result = $apiInstance->categoriesIdTransactionsGet($id, $start_date, $end_date, $updated_since, $uncategorised, $type, $needs_review, $search, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->categoriesIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| A comma-separated list of category IDs. | |
| **start_date** | **string**| Limit to transactions on or after this date. Required if end_date is provided. If not provided, defaults to the furtherest date allowed by the user&#39;s subscription. | [optional] |
| **end_date** | **string**| Limit to transactions on or before this date. Required if start_date is provided. If not provided, defaults to today&#39;s date. | [optional] |
| **updated_since** | **string**| Limit to transactions updated since an ISO 8601 timestamp. | [optional] |
| **uncategorised** | **int**| Limit to uncategorised transactions. | [optional] |
| **type** | **string**| Limit to transactions of this type. | [optional] |
| **needs_review** | **int**| Limit to transactions that need to be reviewed. | [optional] |
| **search** | **string**| Limit to transactions matching a keyword search string. The provided string is matched against the transaction amount, account name, payee, category title, note, labels, and the date in ISO 8601 format. | [optional] |
| **page** | **int**| Choose a particular page of the results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionAccountsIdTransactionsGet()`

```php
transactionAccountsIdTransactionsGet($id, $start_date, $end_date, $updated_since, $uncategorised, $type, $needs_review, $search, $page): \OpenAPI\Client\Model\Transaction[]
```

List transactions in transaction account

Lists transactions belonging to a transaction account by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the transaction account.
$start_date = 2016-11-01; // string | Limit to transactions on or after this date. Required if end_date is provided. If not provided, defaults to the furtherest date allowed by the user's subscription.
$end_date = 2016-11-30; // string | Limit to transactions on or before this date. Required if start_date is provided. If not provided, defaults to today's date.
$updated_since = 2020-10-14T09:20:33+13:00; // string | Limit to transactions updated since an ISO 8601 timestamp.
$uncategorised = 1; // int | Limit to uncategorised transactions.
$type = debit; // string | Limit to transactions of this type.
$needs_review = 1; // int | Limit to transactions that need to be reviewed.
$search = Paypal; // string | Limit to transactions matching a keyword search string. The provided string is matched against the transaction amount, account name, payee, category title, note, labels, and the date in ISO 8601 format.
$page = 3; // int | Choose a particular page of the results.

try {
    $result = $apiInstance->transactionAccountsIdTransactionsGet($id, $start_date, $end_date, $updated_since, $uncategorised, $type, $needs_review, $search, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionAccountsIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction account. | |
| **start_date** | **string**| Limit to transactions on or after this date. Required if end_date is provided. If not provided, defaults to the furtherest date allowed by the user&#39;s subscription. | [optional] |
| **end_date** | **string**| Limit to transactions on or before this date. Required if start_date is provided. If not provided, defaults to today&#39;s date. | [optional] |
| **updated_since** | **string**| Limit to transactions updated since an ISO 8601 timestamp. | [optional] |
| **uncategorised** | **int**| Limit to uncategorised transactions. | [optional] |
| **type** | **string**| Limit to transactions of this type. | [optional] |
| **needs_review** | **int**| Limit to transactions that need to be reviewed. | [optional] |
| **search** | **string**| Limit to transactions matching a keyword search string. The provided string is matched against the transaction amount, account name, payee, category title, note, labels, and the date in ISO 8601 format. | [optional] |
| **page** | **int**| Choose a particular page of the results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionAccountsIdTransactionsPost()`

```php
transactionAccountsIdTransactionsPost($id, $transaction_accounts_id_transactions_post_request): \OpenAPI\Client\Model\Transaction
```

Create a transaction in transaction account

Creates a transaction in a transaction account by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the transaction account.
$transaction_accounts_id_transactions_post_request = new \OpenAPI\Client\Model\TransactionAccountsIdTransactionsPostRequest(); // \OpenAPI\Client\Model\TransactionAccountsIdTransactionsPostRequest

try {
    $result = $apiInstance->transactionAccountsIdTransactionsPost($id, $transaction_accounts_id_transactions_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionAccountsIdTransactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction account. | |
| **transaction_accounts_id_transactions_post_request** | [**\OpenAPI\Client\Model\TransactionAccountsIdTransactionsPostRequest**](../Model/TransactionAccountsIdTransactionsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsIdDelete()`

```php
transactionsIdDelete($id)
```

Delete transaction

Deletes a transaction and all its data by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the transaction.

try {
    $apiInstance->transactionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction. | |

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

## `transactionsIdGet()`

```php
transactionsIdGet($id): \OpenAPI\Client\Model\Transaction
```

Get a transaction

Gets a transaction by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the transaction.

try {
    $result = $apiInstance->transactionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction. | |

### Return type

[**\OpenAPI\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsIdPut()`

```php
transactionsIdPut($id, $transactions_id_put_request): \OpenAPI\Client\Model\Transaction
```

Update a transaction

Updates a transaction by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the transaction.
$transactions_id_put_request = new \OpenAPI\Client\Model\TransactionsIdPutRequest(); // \OpenAPI\Client\Model\TransactionsIdPutRequest

try {
    $result = $apiInstance->transactionsIdPut($id, $transactions_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction. | |
| **transactions_id_put_request** | [**\OpenAPI\Client\Model\TransactionsIdPutRequest**](../Model/TransactionsIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdTransactionsGet()`

```php
usersIdTransactionsGet($id, $start_date, $end_date, $updated_since, $uncategorised, $type, $needs_review, $search, $page): \OpenAPI\Client\Model\Transaction[]
```

List transactions in user

Lists transactions belonging to a user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the account.
$start_date = 2016-11-01; // string | Limit to transactions on or after this date. Required if end_date is provided. If not provided, defaults to the furtherest date allowed by the user's subscription.
$end_date = 2016-11-30; // string | Limit to transactions on or before this date. Required if start_date is provided. If not provided, defaults to today's date.
$updated_since = 2020-10-14T09:20:33+13:00; // string | Limit to transactions updated since an ISO 8601 timestamp.
$uncategorised = 1; // int | Limit to uncategorised transactions.
$type = debit; // string | Limit to transactions of this type.
$needs_review = 1; // int | Limit to transactions that need to be reviewed.
$search = Paypal; // string | Limit to transactions matching a keyword search string. The provided string is matched against the transaction amount, account name, payee, category title, note, labels, and the date in ISO 8601 format.
$page = 3; // int | Choose a particular page of the results.

try {
    $result = $apiInstance->usersIdTransactionsGet($id, $start_date, $end_date, $updated_since, $uncategorised, $type, $needs_review, $search, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->usersIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the account. | |
| **start_date** | **string**| Limit to transactions on or after this date. Required if end_date is provided. If not provided, defaults to the furtherest date allowed by the user&#39;s subscription. | [optional] |
| **end_date** | **string**| Limit to transactions on or before this date. Required if start_date is provided. If not provided, defaults to today&#39;s date. | [optional] |
| **updated_since** | **string**| Limit to transactions updated since an ISO 8601 timestamp. | [optional] |
| **uncategorised** | **int**| Limit to uncategorised transactions. | [optional] |
| **type** | **string**| Limit to transactions of this type. | [optional] |
| **needs_review** | **int**| Limit to transactions that need to be reviewed. | [optional] |
| **search** | **string**| Limit to transactions matching a keyword search string. The provided string is matched against the transaction amount, account name, payee, category title, note, labels, and the date in ISO 8601 format. | [optional] |
| **page** | **int**| Choose a particular page of the results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
