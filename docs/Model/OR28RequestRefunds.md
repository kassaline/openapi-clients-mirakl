# # OR28RequestRefunds

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The offer part amount to be refunded. | [optional]
**currencyIsoCode** | **string** | The currency (iso format) used by the shop (the field is required if the shop is not using the default Operator platform currency) | [optional]
**excludedFromShipment** | **bool** | Exclude the refunded quantity from shipments | [optional]
**fees** | [**\OpenAPI\Client\Mirakl\Model\OR28RequestRefundsFees[]**](OR28RequestRefundsFees.md) | The fee part amount to be refunded | [optional]
**orderLineId** | **string** | The identifier of the order line that must be refunded | [optional]
**quantity** | **int** | The quantity of products to refund. This quantity is informative only. | [optional] [default to 0]
**reasonCode** | **string** | Refund&#39;s reason code | [optional]
**shippingAmount** | **float** | The shipping charges part amount to be refunded | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR28RequestRefundsShippingTaxes[]**](OR28RequestRefundsShippingTaxes.md) | The taxes to be refunded on the shipping price &lt;br/&gt;This field is required if the order has shipping taxes. | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\OR28RequestRefundsTaxes[]**](OR28RequestRefundsTaxes.md) | The taxes to be refunded on the product price &lt;br/&gt;This field is required if the order has taxes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
