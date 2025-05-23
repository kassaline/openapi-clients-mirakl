# # OR11Response200OrdersOrderLines

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**canRefund** | **bool** | Indicate whether the order line full amount can be refunded | [optional]
**cancelations** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCancelations[]**](OR11Response200OrdersOrderLinesCancelations.md) | List of the cancellations | [optional]
**categoryCode** | **string** | Category code of the product associated with the order line | [optional]
**categoryLabel** | **string** | Category label of the product associated with the order line | [optional]
**commissionFee** | **float** | Order line&#39;s commission fee | [optional]
**commissionTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCommissionTaxes[]**](OR11Response200OrdersOrderLinesCommissionTaxes.md) | Commission taxes | [optional]
**createdDate** | **\DateTime** | Order line&#39;s creation date | [optional]
**debitedDate** | **\DateTime** | Order line&#39;s debited date | [optional]
**description** | **string** | Order line&#39;s description | [optional]
**ecoContributions** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesEcoContributions[]**](OR11Response200OrdersOrderLinesEcoContributions.md) | List of eco-contribution amounts and corresponding producer identifiers, if applicable&lt;br/&gt; Only available if the operator activates the circular economy information collection. | [optional]
**fees** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesFees[]**](OR11Response200OrdersOrderLinesFees.md) | List of fees applied on the order line | [optional]
**lastUpdatedDate** | **\DateTime** | Order line&#39;s last updated date | [optional]
**measurement** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesMeasurement**](OR11Response200OrdersOrderLinesMeasurement.md) |  | [optional]
**offerId** | **int** | Associated offer&#39;s id | [optional]
**offerSku** | **string** | Associated offer sku (this is the sku of the offer defined by the shop) | [optional]
**offerStateCode** | **string** | State of the offer associated with the order line | [optional]
**orderLineAdditionalFields** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesOrderLineAdditionalFields[]**](OR11Response200OrdersOrderLinesOrderLineAdditionalFields.md) | List of custom fields | [optional]
**orderLineId** | **string** | Order line&#39;s identifier | [optional]
**orderLineIndex** | **int** | Order line&#39;s index in the order | [optional]
**orderLineState** | **string** | Order line&#39;s state | [optional]
**orderLineStateReasonCode** | **string** | Reason&#39;s code of the order line&#39;s state | [optional]
**orderLineStateReasonLabel** | **string** | Reason&#39;s label of the order line&#39;s state | [optional]
**originUnitPrice** | **float** | The original unit price of the offer associated with the order line | [optional]
**price** | **float** | Order line&#39;s price without shipping price | [optional]
**priceAdditionalInfo** | **string** | Price&#39;s additional information of the offer | [optional]
**priceAmountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesPriceAmountBreakdown**](OR11Response200OrdersOrderLinesPriceAmountBreakdown.md) |  | [optional]
**priceUnit** | **float** | Unit price for the offer associated with the order line | [optional]
**productMedias** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesProductMedias[]**](OR11Response200OrdersOrderLinesProductMedias.md) | List of all product&#39;s media associated to the order line | [optional]
**productShopSku** | **string** | Shop SKU of the product associated with the order line | [optional]
**productSku** | **string** | SKU of the product associated with the order line | [optional]
**productTitle** | **string** | Title of the product associated with the order line | [optional]
**promotions** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesPromotions[]**](OR11Response200OrdersOrderLinesPromotions.md) | List of promotions | [optional]
**purchaseInformation** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesPurchaseInformation**](OR11Response200OrdersOrderLinesPurchaseInformation.md) |  | [optional]
**quantity** | **int** | Product&#39;s quantity for the order line | [optional]
**receivedDate** | **\DateTime** | Product&#39;s date of receipt | [optional]
**refunds** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefunds[]**](OR11Response200OrdersOrderLinesRefunds.md) | List of the refunds | [optional]
**shippedDate** | **\DateTime** | Order line&#39;s shipped date | [optional]
**shippingFrom** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesShippingFrom**](OR11Response200OrdersOrderLinesShippingFrom.md) |  | [optional]
**shippingPrice** | **float** | Total price of the order line&#39;s shipping price | [optional]
**shippingPriceAmountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesShippingPriceAmountBreakdown**](OR11Response200OrdersOrderLinesShippingPriceAmountBreakdown.md) |  | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesShippingTaxes[]**](OR11Response200OrdersOrderLinesShippingTaxes.md) | List of taxes applied on shipping charges | [optional]
**taxLegalNotice** | **string** | The legal notice applying to the order line’s taxes | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesTaxes[]**](OR11Response200OrdersOrderLinesTaxes.md) | List of taxes applied on product price | [optional]
**totalCommission** | **float** | Order line&#39;s total commission (sum of the commission fee and the commission vat) | [optional]
**totalPrice** | **float** | Order line&#39;s price with shipping price and fees. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
