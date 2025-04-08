# # OR32Response200OrderLinesAdjustedCancelations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The offer part amount canceled | [optional]
**currencyIsoCode** | **string** |  | [optional]
**ecoContributions** | [**\OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsEcoContributions[]**](OR32Response200OrderLinesAdjustedCancelationsEcoContributions.md) | List of eco-contribution amounts and corresponding producer identifiers, if applicable&lt;br/&gt; Only available if the operator activates the circular economy information collection. | [optional]
**quantity** | **int** | The quantity of goods canceled | [optional]
**reasonCode** | **string** | Cancellation&#39;s reason code | [optional]
**shippingAmount** | **float** | The shipping charges part amount canceled | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsShippingTaxes[]**](OR32Response200OrderLinesAdjustedCancelationsShippingTaxes.md) | The taxes canceled on the shipping price | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedCancelationsTaxes[]**](OR32Response200OrderLinesAdjustedCancelationsTaxes.md) | The taxes canceled on the product price | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
