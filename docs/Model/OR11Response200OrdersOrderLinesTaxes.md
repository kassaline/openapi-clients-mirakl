# # OR11Response200OrdersOrderLinesTaxes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Tax amount | [optional]
**amountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesTaxesAmountBreakdown**](OR11Response200OrdersOrderLinesTaxesAmountBreakdown.md) |  | [optional]
**code** | **string** | Tax code | [optional]
**originUnitAmount** | **float** | The original tax amount of the offer associated with the order line before a discount or a promotion | [optional]
**purchaseTax** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersOrderLinesTaxesPurchaseTax**](OR11Response200OrdersOrderLinesTaxesPurchaseTax.md) |  | [optional]
**rate** | **float** | Tax rate | [optional]
**taxCalculationRule** | **string** | The type of automated calculation done during a partial refund or cancellation.&lt;br/&gt;Possible values:&lt;br/&gt;- none: No calculation will be done in case of partial refund or cancellation. You must provide the amount of tax you want to refund or cancel when you request a refund or cancellation. Otherwise, the tax will not get refunded/cancelled.&lt;br/&gt;- proportional_to_amount: Mirakl will automatically calculate the proportional tax amount when a refund or cancellation is requested. You do not need to provide the amount of this tax when you request a refund or cancellation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
