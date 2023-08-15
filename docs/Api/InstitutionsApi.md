# OpenAPI\Client\InstitutionsApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**institutionsIdDelete()**](InstitutionsApi.md#institutionsIdDelete) | **DELETE** /institutions/{id} | Delete institution |
| [**institutionsIdGet()**](InstitutionsApi.md#institutionsIdGet) | **GET** /institutions/{id} | Get institution |
| [**institutionsIdPut()**](InstitutionsApi.md#institutionsIdPut) | **PUT** /institutions/{id} | Update institution |
| [**usersIdInstitutionsGet()**](InstitutionsApi.md#usersIdInstitutionsGet) | **GET** /users/{id}/institutions | List institutions in user |
| [**usersIdInstitutionsPost()**](InstitutionsApi.md#usersIdInstitutionsPost) | **POST** /users/{id}/institutions | Create institution in user |


## `institutionsIdDelete()`

```php
institutionsIdDelete($id, $merge_into_institution_id)
```

Delete institution

Deletes an institution and all data within. Alternatively, another institution can be provided to merge the data into to avoid losing it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the institution.
$merge_into_institution_id = 44; // int | The unique identifier of the institution to merge into.

try {
    $apiInstance->institutionsIdDelete($id, $merge_into_institution_id);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->institutionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the institution. | |
| **merge_into_institution_id** | **int**| The unique identifier of the institution to merge into. | [optional] |

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

## `institutionsIdGet()`

```php
institutionsIdGet($id): \OpenAPI\Client\Model\Institution
```

Get institution

Gets an institution by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the institution.

try {
    $result = $apiInstance->institutionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->institutionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the institution. | |

### Return type

[**\OpenAPI\Client\Model\Institution**](../Model/Institution.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `institutionsIdPut()`

```php
institutionsIdPut($id, $institutions_id_put_request): \OpenAPI\Client\Model\Institution
```

Update institution

Updates the title and currency code for an institution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the institution.
$institutions_id_put_request = new \OpenAPI\Client\Model\InstitutionsIdPutRequest(); // \OpenAPI\Client\Model\InstitutionsIdPutRequest

try {
    $result = $apiInstance->institutionsIdPut($id, $institutions_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->institutionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the institution. | |
| **institutions_id_put_request** | [**\OpenAPI\Client\Model\InstitutionsIdPutRequest**](../Model/InstitutionsIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Institution**](../Model/Institution.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdInstitutionsGet()`

```php
usersIdInstitutionsGet($id): \OpenAPI\Client\Model\Institution[]
```

List institutions in user

Lists all the institutions belonging to the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user

try {
    $result = $apiInstance->usersIdInstitutionsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->usersIdInstitutionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user | |

### Return type

[**\OpenAPI\Client\Model\Institution[]**](../Model/Institution.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdInstitutionsPost()`

```php
usersIdInstitutionsPost($id, $users_id_institutions_post_request): \OpenAPI\Client\Model\Institution
```

Create institution in user

Creates an institution belonging to a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user
$users_id_institutions_post_request = new \OpenAPI\Client\Model\UsersIdInstitutionsPostRequest(); // \OpenAPI\Client\Model\UsersIdInstitutionsPostRequest

try {
    $result = $apiInstance->usersIdInstitutionsPost($id, $users_id_institutions_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->usersIdInstitutionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user | |
| **users_id_institutions_post_request** | [**\OpenAPI\Client\Model\UsersIdInstitutionsPostRequest**](../Model/UsersIdInstitutionsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Institution**](../Model/Institution.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
