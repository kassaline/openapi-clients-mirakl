# # OR11Response200OrdersOrderLinesCancelations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Cancellation&#39;s amount | [optional]
**amountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCancelationsAmountBreakdown**](OR11Response200OrdersOrderLinesCancelationsAmountBreakdown.md) |  | [optional]
**commissionAmount** | **float** | Cancellation&#39;s commission amount | [optional]
**commissionTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCancelationsCommissionTaxes[]**](OR11Response200OrdersOrderLinesCancelationsCommissionTaxes.md) | Cancellation&#39;s commission taxes | [optional]
**commissionTotalAmount** | **float** | The total commission amount of the cancellation (commission amount + commission taxes) | [optional]
**createdDate** | **\DateTime** | Cancellation&#39;s creation date | [optional]
**ecoContributions** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCancelationsEcoContributions[]**](OR11Response200OrdersOrderLinesCancelationsEcoContributions.md) | List of eco-contribution amounts and corresponding producer identifiers, if applicable&lt;br/&gt; Only available if the operator activates the circular economy information collection. | [optional]
**fees** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCancelationsFees[]**](OR11Response200OrdersOrderLinesCancelationsFees.md) | List of fees canceled on the order line | [optional]
**id** | **string** | Cancellation&#39;s id | [optional]
**purchaseInformation** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCancelationsPurchaseInformation**](OR11Response200OrdersOrderLinesCancelationsPurchaseInformation.md) |  | [optional]
**quantity** | **int** | The quantity of products canceled (This quantity is informative only) | [optional]
**reasonCode** | **string** | Cancellation reason&#39;s code | [optional]
**shippingAmount** | **float** | Cancellation&#39;s shipping amount | [optional]
**shippingAmountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCancelationsShippingAmountBreakdown**](OR11Response200OrdersOrderLinesCancelationsShippingAmountBreakdown.md) |  | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCancelationsShippingTaxes[]**](OR11Response200OrdersOrderLinesCancelationsShippingTaxes.md) | The taxes on the shipping price | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesCancelationsTaxes[]**](OR11Response200OrdersOrderLinesCancelationsTaxes.md) | The taxes on the price | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
