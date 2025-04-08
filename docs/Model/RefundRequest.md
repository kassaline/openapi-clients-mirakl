# # RefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderLineId** | **string** | Unique order line identifier used by Mirakl Connect. ID of the order line to refund. | [optional]
**price** | [**\OpenAPI\Client\Mirakl\Model\Money**](Money.md) | Product price to refund, excluding taxes and shipping price | [optional]
**productId** | **string** | Seller product identifier on the channel | [optional]
**quantity** | **int** | Product quantity to refund | [optional]
**reason** | **string** | The reason why the order line is refunded | [optional]
**shippingPrice** | [**\OpenAPI\Client\Mirakl\Model\Money**](Money.md) | Shipping price to refund, excluding shipping taxes | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\RefundedTaxRequest[]**](RefundedTaxRequest.md) | Shipping taxes to refund | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\RefundedTaxRequest[]**](RefundedTaxRequest.md) | Taxes to refund | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
