# OpenAPI\Client\CategoriesApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categoriesIdDelete()**](CategoriesApi.md#categoriesIdDelete) | **DELETE** /categories/{id} | Delete category |
| [**categoriesIdGet()**](CategoriesApi.md#categoriesIdGet) | **GET** /categories/{id} | Get category |
| [**categoriesIdPut()**](CategoriesApi.md#categoriesIdPut) | **PUT** /categories/{id} | Update category |
| [**usersIdCategoriesGet()**](CategoriesApi.md#usersIdCategoriesGet) | **GET** /users/{id}/categories | List categories in user |
| [**usersIdCategoriesPost()**](CategoriesApi.md#usersIdCategoriesPost) | **POST** /users/{id}/categories | Create category in user |


## `categoriesIdDelete()`

```php
categoriesIdDelete($id)
```

Delete category

Deletes a particular category by its ID. This will delete all budgets within the category, and uncategorize all transactions assigned to the category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the category.

try {
    $apiInstance->categoriesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the category. | |

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

## `categoriesIdGet()`

```php
categoriesIdGet($id): \OpenAPI\Client\Model\Category
```

Get category

Gets a particular category by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the category.

try {
    $result = $apiInstance->categoriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the category. | |

### Return type

[**\OpenAPI\Client\Model\Category**](../Model/Category.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesIdPut()`

```php
categoriesIdPut($id, $categories_id_put_request): \OpenAPI\Client\Model\Category
```

Update category

Updates a category by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the category.
$categories_id_put_request = new \OpenAPI\Client\Model\CategoriesIdPutRequest(); // \OpenAPI\Client\Model\CategoriesIdPutRequest

try {
    $result = $apiInstance->categoriesIdPut($id, $categories_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the category. | |
| **categories_id_put_request** | [**\OpenAPI\Client\Model\CategoriesIdPutRequest**](../Model/CategoriesIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Category**](../Model/Category.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdCategoriesGet()`

```php
usersIdCategoriesGet($id): \OpenAPI\Client\Model\Category[]
```

List categories in user

Lists all categories belonging to a user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.

try {
    $result = $apiInstance->usersIdCategoriesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->usersIdCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |

### Return type

[**\OpenAPI\Client\Model\Category[]**](../Model/Category.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdCategoriesPost()`

```php
usersIdCategoriesPost($id, $users_id_categories_post_request): \OpenAPI\Client\Model\Category
```

Create category in user

Creates a category belonging to the user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.
$users_id_categories_post_request = new \OpenAPI\Client\Model\UsersIdCategoriesPostRequest(); // \OpenAPI\Client\Model\UsersIdCategoriesPostRequest

try {
    $result = $apiInstance->usersIdCategoriesPost($id, $users_id_categories_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->usersIdCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |
| **users_id_categories_post_request** | [**\OpenAPI\Client\Model\UsersIdCategoriesPostRequest**](../Model/UsersIdCategoriesPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Category**](../Model/Category.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
