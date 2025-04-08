# # OR28Response200Refunds

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The offer part amount of the refund | [optional]
**amountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR28Response200RefundsAmountBreakdown**](OR28Response200RefundsAmountBreakdown.md) |  | [optional]
**currencyIsoCode** | **string** | The currency (iso format) used by the shop (the field is required if the shop is not using the default Operator platform currency) | [optional]
**ecoContributions** | [**\OpenAPI\Client\Mirakl\Model\OR28Response200RefundsEcoContributions[]**](OR28Response200RefundsEcoContributions.md) | List of eco-contribution amounts and corresponding producer identifiers, if applicable&lt;br/&gt; Only available if the operator activates the circular economy information collection. | [optional]
**excludedFromShipment** | **bool** | Exclude the refunded quantity from shipments | [optional]
**fees** | [**\OpenAPI\Client\Mirakl\Model\OR28Response200RefundsFees[]**](OR28Response200RefundsFees.md) | List of fees refunded on the order line | [optional]
**orderLineId** | **string** | The identifier of the order line on which the refund has been created | [optional]
**orderRefundId** | **string** | The group identifier of the refunds created at the same time on the order | [optional]
**purchaseInformation** | [**\OpenAPI\Client\Mirakl\Model\OR28Response200RefundsPurchaseInformation**](OR28Response200RefundsPurchaseInformation.md) |  | [optional]
**quantity** | **int** | The quantity of goods to refund | [optional]
**reasonCode** | **string** | Refund&#39;s reason code | [optional]
**refundId** | **string** | The identifier of the created refund | [optional]
**shippingAmount** | **float** | The shipping charges part amount of the refund | [optional]
**shippingAmountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR28Response200RefundsShippingAmountBreakdown**](OR28Response200RefundsShippingAmountBreakdown.md) |  | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR28Response200RefundsShippingTaxes[]**](OR28Response200RefundsShippingTaxes.md) | List of taxes refunded on shipping charges | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\OR28Response200RefundsTaxes[]**](OR28Response200RefundsTaxes.md) | List of taxes refunded on product price | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
