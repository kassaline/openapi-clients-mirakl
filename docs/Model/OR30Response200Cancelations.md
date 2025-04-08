# # OR30Response200Cancelations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The offer part amount of the cancellation | [optional]
**amountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR30Response200CancelationsAmountBreakdown**](OR30Response200CancelationsAmountBreakdown.md) |  | [optional]
**cancelationId** | **string** | The identifier of the created cancellation | [optional]
**currencyIsoCode** | **string** | The currency (iso format) used by the shop (the field is required if the shop is not using the default Operator platform currency) | [optional]
**ecoContributions** | [**\OpenAPI\Client\Mirakl\Model\OR30Response200CancelationsEcoContributions[]**](OR30Response200CancelationsEcoContributions.md) | List of eco-contribution amounts and corresponding producer identifiers, if applicable&lt;br/&gt; Only available if the operator activates the circular economy information collection. | [optional]
**fees** | [**\OpenAPI\Client\Mirakl\Model\OR30Response200CancelationsFees[]**](OR30Response200CancelationsFees.md) | List of fees canceled on the order line | [optional]
**orderLineId** | **string** | Order line&#39;s identifier on which the cancellation has been created | [optional]
**purchaseInformation** | [**\OpenAPI\Client\Mirakl\Model\OR30Response200CancelationsPurchaseInformation**](OR30Response200CancelationsPurchaseInformation.md) |  | [optional]
**quantity** | **int** | The quantity of canceled goods | [optional]
**reasonCode** | **string** | Cancellation&#39;s reason code | [optional]
**shippingAmount** | **float** | The shipping charges part amount of the cancellation | [optional]
**shippingAmountBreakdown** | [**\OpenAPI\Client\Mirakl\Model\OR30Response200CancelationsShippingAmountBreakdown**](OR30Response200CancelationsShippingAmountBreakdown.md) |  | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR30Response200CancelationsShippingTaxes[]**](OR30Response200CancelationsShippingTaxes.md) | List of taxes canceled on shipping charges | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\OR30Response200CancelationsTaxes[]**](OR30Response200CancelationsTaxes.md) | List of taxes canceled on product price | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
