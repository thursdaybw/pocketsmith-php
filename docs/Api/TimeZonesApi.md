# OpenAPI\Client\TimeZonesApi

All URIs are relative to https://api.pocketsmith.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**timeZonesGet()**](TimeZonesApi.md#timeZonesGet) | **GET** /time_zones | List time zones |


## `timeZonesGet()`

```php
timeZonesGet(): \OpenAPI\Client\Model\TimeZone[]
```

List time zones

Lists time zones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TimeZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->timeZonesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeZonesApi->timeZonesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TimeZone[]**](../Model/TimeZone.md)

### Authorization

[developerKey](../../README.md#developerKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
