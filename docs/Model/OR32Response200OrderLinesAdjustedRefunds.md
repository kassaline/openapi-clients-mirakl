# # OR32Response200OrderLinesAdjustedRefunds

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The offer part amount refunded. | [optional]
**currencyIsoCode** | **string** |  | [optional]
**ecoContributions** | [**\OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedRefundsEcoContributions[]**](OR32Response200OrderLinesAdjustedRefundsEcoContributions.md) | List of eco-contribution amounts and corresponding producer identifiers, if applicable&lt;br/&gt; Only available if the operator activates the circular economy information collection. | [optional]
**quantity** | **int** | The quantity of products refunded. This quantity is informative only. | [optional]
**reasonCode** | **string** | Refund&#39;s reason code | [optional]
**shippingAmount** | **float** | The shipping charges part amount refunded | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedRefundsShippingTaxes[]**](OR32Response200OrderLinesAdjustedRefundsShippingTaxes.md) | The taxes refunded on the shipping price | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\OR32Response200OrderLinesAdjustedRefundsTaxes[]**](OR32Response200OrderLinesAdjustedRefundsTaxes.md) | The taxes refunded on the product price | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
