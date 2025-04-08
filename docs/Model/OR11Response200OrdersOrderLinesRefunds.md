# # OR11Response200OrdersOrderLinesRefunds

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Refund&#39;s amount | [optional]
**amountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsAmountBreakdown**](OR11Response200OrdersOrderLinesRefundsAmountBreakdown.md) |  | [optional]
**commissionAmount** | **float** | Refund&#39;s commission amount | [optional]
**commissionTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsCommissionTaxes[]**](OR11Response200OrdersOrderLinesRefundsCommissionTaxes.md) | Refund&#39;s commission taxes | [optional]
**commissionTotalAmount** | **float** | The total commission amount of the refund (commission amount + commission taxes) | [optional]
**createdDate** | **\DateTime** | Refund&#39;s creation date | [optional]
**ecoContributions** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsEcoContributions[]**](OR11Response200OrdersOrderLinesRefundsEcoContributions.md) | List of eco-contribution amounts and corresponding producer identifiers, if applicable&lt;br/&gt; Only available if the operator activates the circular economy information collection. | [optional]
**fees** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsFees[]**](OR11Response200OrdersOrderLinesRefundsFees.md) | List of fees refunded on the order line | [optional]
**id** | **string** | Refund&#39;s id | [optional]
**orderRefundId** | **string** | The group identifier of the refunds created at the same time on the order | [optional]
**purchaseInformation** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsPurchaseInformation**](OR11Response200OrdersOrderLinesRefundsPurchaseInformation.md) |  | [optional]
**quantity** | **int** | The quantity of products refunded (This quantity is informative only). | [optional]
**reasonCode** | **string** | Reason&#39;s code of the refund | [optional]
**refundState** | **string** | Refund&#39;s state | [optional]
**shippingAmount** | **float** | Refund&#39;s shipping amount | [optional]
**shippingAmountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsShippingAmountBreakdown**](OR11Response200OrdersOrderLinesRefundsShippingAmountBreakdown.md) |  | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsShippingTaxes[]**](OR11Response200OrdersOrderLinesRefundsShippingTaxes.md) | The taxes on the shipping price | [optional]
**state** | **string** | Refund&#39;s state | [optional]
**taxLegalNotice** | **string** | The legal notice applying to the refunded order line’s taxes | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesRefundsTaxes[]**](OR11Response200OrdersOrderLinesRefundsTaxes.md) | The taxes on the price | [optional]
**transactionDate** | **\DateTime** | The transaction date of the refund payment | [optional]
**transactionNumber** | **string** | The transaction number of the refund payment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
