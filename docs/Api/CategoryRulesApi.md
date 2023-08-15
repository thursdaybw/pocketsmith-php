# OpenAPI\Client\CategoryRulesApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categoriesIdCategoryRulesPost()**](CategoryRulesApi.md#categoriesIdCategoryRulesPost) | **POST** /categories/{id}/category_rules | Create category rule in category |
| [**usersIdCategoryRulesGet()**](CategoryRulesApi.md#usersIdCategoryRulesGet) | **GET** /users/{id}/category_rules | List category rules in user |


## `categoriesIdCategoryRulesPost()`

```php
categoriesIdCategoryRulesPost($id, $categories_id_category_rules_post_request): \OpenAPI\Client\Model\CategoryRule
```

Create category rule in category

Creates a rule to allocate a category to transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoryRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the category.
$categories_id_category_rules_post_request = new \OpenAPI\Client\Model\CategoriesIdCategoryRulesPostRequest(); // \OpenAPI\Client\Model\CategoriesIdCategoryRulesPostRequest

try {
    $result = $apiInstance->categoriesIdCategoryRulesPost($id, $categories_id_category_rules_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryRulesApi->categoriesIdCategoryRulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the category. | |
| **categories_id_category_rules_post_request** | [**\OpenAPI\Client\Model\CategoriesIdCategoryRulesPostRequest**](../Model/CategoriesIdCategoryRulesPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryRule**](../Model/CategoryRule.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersIdCategoryRulesGet()`

```php
usersIdCategoryRulesGet($id): \OpenAPI\Client\Model\CategoryRule[]
```

List category rules in user

Lists all category rules belonging to a user by their ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoryRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the user.

try {
    $result = $apiInstance->usersIdCategoryRulesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryRulesApi->usersIdCategoryRulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the user. | |

### Return type

[**\OpenAPI\Client\Model\CategoryRule[]**](../Model/CategoryRule.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
