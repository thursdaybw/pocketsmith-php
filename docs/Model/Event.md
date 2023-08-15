# # Event

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the event. | [optional]
**category** | [**\OpenAPI\Client\Model\Category**](Category.md) |  | [optional]
**scenario** | [**\OpenAPI\Client\Model\Scenario**](Scenario.md) |  | [optional]
**amount** | **float** | The amount of the event. | [optional]
**amount_in_base_currency** | **float** | The amount of the event in the user&#39;s base currency. | [optional]
**currency_code** | **string** | The currency code of the event. | [optional]
**date** | **string** | The date of the event. | [optional]
**colour** | **string** | The CSS hex-style colour of the event. | [optional]
**note** | **string** | The note of the event. | [optional]
**repeat_type** | **string** | The repeat type of the event. | [optional]
**repeat_interval** | **int** | The repeat interval of how often the event takes place. | [optional]
**series_id** | **int** | The unique identifier of the series that the event belongs to. | [optional]
**series_start_id** | **string** | The unique identifier of the series followed by the series&#39;s start date. | [optional]
**infinite_series** | **bool** | Whether the event repeats and does not have an end date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
