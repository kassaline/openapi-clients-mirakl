# # Adjustment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustmentId** | **string** | Unique adjustment identifier used by Mirakl Connect. | [optional]
**createdAt** | **\DateTime** | Adjustment date | [optional]
**id** | **string** | Unique identifier by adjustment type. Deprecated, use adjustment_id instead. | [optional]
**price** | [**\OpenAPI\Client\Mirakl\Model\Money**](Money.md) |  | [optional]
**quantity** | **int** | Product quantity adjusted. | [optional]
**reason** | **string** | The reason why the order line is adjusted. | [optional]
**shippingPrice** | [**\OpenAPI\Client\Mirakl\Model\Money**](Money.md) |  | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\TaxAdjustment[]**](TaxAdjustment.md) | Shipping taxes adjusted | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\TaxAdjustment[]**](TaxAdjustment.md) | Taxes adjusted | [optional]
**type** | **string** | The type of adjustment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
