# # CancelRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderLineId** | **string** | Unique order line identifier used by Mirakl Connect. ID of the order line to cancel. | [optional]
**price** | [**\OpenAPI\Client\Mirakl\Model\Money**](Money.md) | Product price to cancel, excluding taxes and shipping price | [optional]
**productId** | **string** | Seller product identifier on the channel | [optional]
**quantity** | **int** | Product quantity to cancel | [optional]
**reason** | **string** | The reason why the order line is canceled | [optional]
**shippingPrice** | [**\OpenAPI\Client\Mirakl\Model\Money**](Money.md) | Shipping price to cancel, excluding shipping taxes | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\CanceledTaxRequest[]**](CanceledTaxRequest.md) | Shipping taxes to cancel | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\CanceledTaxRequest[]**](CanceledTaxRequest.md) | Taxes to cancel | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
