# # Category

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the category. | [optional]
**title** | **string** | The title of the category. | [optional]
**colour** | **string** | The colour for the category. | [optional]
**children** | [**\OpenAPI\Client\Model\Category[]**](Category.md) | The category&#39;s child categories. | [optional]
**parent_id** | **int** | The unique identifier of the parent category of this category, or null if this category has no parent (i.e. is a top-level category) | [optional]
**is_transfer** | **bool** | Whether this category has been marked as a transfer category. | [optional]
**is_bill** | **bool** | Whether the category is a bill category. A bill category is when budgeted amounts are normally spent at once, instead of spread across a budgeting period. This category will be included in the bill reminder email when set to true. | [optional]
**roll_up** | **bool** | Whether the category&#39;s budget is rolled up into its parent category, if a parent category is present. | [optional]
**refund_behaviour** | **string** | How the category&#39;s refunds or deductions should be reported on. | [optional]
**created_at** | **string** | When the category was created. | [optional]
**updated_at** | **string** | When the category was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
