# # OF24RequestOffersAllPrices

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channelCode** | **string** | The channel code the prices will be linked to. To set the default prices, set it to null. | [optional]
**discountEndDate** | **string** | The end date of the discount. If no discount is desired, set it to null. | [optional]
**discountStartDate** | **string** | The start date of the discount. If no discount is desired, set it to null. | [optional]
**unitDiscountPrice** | **float** | The default unit discount price, i.e. the unit price when the discount applied. | [optional]
**unitOriginPrice** | **float** | The default unit original price, i.e. the unit price without taking discounts nor volume prices into account. | [optional]
**volumePrices** | [**\OpenAPI\Client\Mirakl\Model\OF24RequestOffersAllPricesVolumePrices[]**](OF24RequestOffersAllPricesVolumePrices.md) | The volume prices applicable for the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
