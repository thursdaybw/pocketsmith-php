# OpenAPI\Client\AttachmentsApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachmentsIdDelete()**](AttachmentsApi.md#attachmentsIdDelete) | **DELETE** /attachments/{id} | Delete attachment |
| [**attachmentsIdGet()**](AttachmentsApi.md#attachmentsIdGet) | **GET** /attachments/{id} | Get attachment |
| [**attachmentsIdPut()**](AttachmentsApi.md#attachmentsIdPut) | **PUT** /attachments/{id} | Update attachment |
| [**transactionsIdAttachmentsGet()**](AttachmentsApi.md#transactionsIdAttachmentsGet) | **GET** /transactions/{id}/attachments | List attachments in transaction |
| [**transactionsIdAttachmentsPost()**](AttachmentsApi.md#transactionsIdAttachmentsPost) | **POST** /transactions/{id}/attachments | Assigns attachment to transaction |
| [**transactionsTransactionIdAttachmentsAttachmentIdDelete()**](AttachmentsApi.md#transactionsTransactionIdAttachmentsAttachmentIdDelete) | **DELETE** /transactions/{transaction_id}/attachments/{attachment_id} | Unassigns attachment in transaction |
| [**usersIdAttachmentsGet()**](AttachmentsApi.md#usersIdAttachmentsGet) | **GET** /users/{id}/attachments | Lists attachments in user |
| [**usersIdAttachmentsPost()**](AttachmentsApi.md#usersIdAttachmentsPost) | **POST** /users/{id}/attachments | Create attachment in user |


## `attachmentsIdDelete()`

```php
attachmentsIdDelete($id)
```

Delete attachment

Deletes a particular attachment by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the attachment.

try {
    $apiInstance->attachmentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the attachment. | |

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

## `attachmentsIdGet()`

```php
attachmentsIdGet($id): \OpenAPI\Client\Model\Attachment
```

Get attachment

Gets a particular attachment by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the attachment.

try {
    $result = $apiInstance->attachmentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the attachment. | |

### Return type

[**\OpenAPI\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentsIdPut()`

```php
attachmentsIdPut($id, $attachments_id_put_request): \OpenAPI\Client\Model\Attachment
```

Update attachment

Updates the title of the attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the attachment.
$attachments_id_put_request = new \OpenAPI\Client\Model\AttachmentsIdPutRequest(); // \OpenAPI\Client\Model\AttachmentsIdPutRequest

try {
    $result = $apiInstance->attachmentsIdPut($id, $attachments_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the attachment. | |
| **attachments_id_put_request** | [**\OpenAPI\Client\Model\AttachmentsIdPutRequest**](../Model/AttachmentsIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsIdAttachmentsGet()`

```php
transactionsIdAttachmentsGet($id): \OpenAPI\Client\Model\Attachment[]
```

List attachments in transaction

Lists attachments belonging to a transaction by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the transaction.

try {
    $result = $apiInstance->transactionsIdAttachmentsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->transactionsIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction. | |

### Return type

[**\OpenAPI\Client\Model\Attachment[]**](../Model/Attachment.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsIdAttachmentsPost()`

```php
transactionsIdAttachmentsPost($id, $transactions_id_attachments_post_request): \OpenAPI\Client\Model\Attachment
```

Assigns attachment to transaction

Assigns an attachment to the transaction by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the transaction.
$transactions_id_attachments_post_request = new \OpenAPI\Client\Model\TransactionsIdAttachmentsPostRequest(); // \OpenAPI\Client\Model\TransactionsIdAttachmentsPostRequest

try {
    $result = $apiInstance->transactionsIdAttachmentsPost($id, $transactions_id_attachments_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->transactionsIdAttachmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the transaction. | |
| **transactions_id_attachments_post_request** | [**\OpenAPI\Client\Model\TransactionsIdAttachmentsPostRequest**](../Model/TransactionsIdAttachmentsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsTransactionIdAttachmentsAttachmentIdDelete()`

```php
transactionsTransactionIdAttachmentsAttachmentIdDelete($transaction_id, $attachment_id)
```

Unassigns attachment in transaction

Unassigns a particular attachment by its ID from the transaction ID. This does not delete the attachment, it only removes its association from the transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 42; // int | The unique identifier of the transaction.
$attachment_id = 1438154; // int | The unique identifier of the attachment.

try {
    $apiInstance->transactionsTransactionIdAttachmentsAttachmentIdDelete($transaction_id, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->transactionsTransactionIdAttachmentsAttachmentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **int**| The unique identifier of the transaction. | |
| **attachment_id** | **int**| The unique identifier of the attachment. | |

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

## `usersIdAttachmentsGet()`

```php
usersIdAttachmentsGet($id, $unassigned): \OpenAPI\Client\Model\Attachment[]
```

Lists attachments in user

Lists attachments belonging to a user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.
$unassigned = 1; // int | If set, returns unassigned attachments, that are available for assigning to a transaction.

try {
    $result = $apiInstance->usersIdAttachmentsGet($id, $unassigned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->usersIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |
| **unassigned** | **int**| If set, returns unassigned attachments, that are available for assigning to a transaction. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Attachment[]**](../Model/Attachment.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdAttachmentsPost()`

```php
usersIdAttachmentsPost($id, $users_id_attachments_post_request): \OpenAPI\Client\Model\Attachment
```

Create attachment in user

Creates an attachment belonging to the user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.
$users_id_attachments_post_request = new \OpenAPI\Client\Model\UsersIdAttachmentsPostRequest(); // \OpenAPI\Client\Model\UsersIdAttachmentsPostRequest

try {
    $result = $apiInstance->usersIdAttachmentsPost($id, $users_id_attachments_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->usersIdAttachmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |
| **users_id_attachments_post_request** | [**\OpenAPI\Client\Model\UsersIdAttachmentsPostRequest**](../Model/UsersIdAttachmentsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
