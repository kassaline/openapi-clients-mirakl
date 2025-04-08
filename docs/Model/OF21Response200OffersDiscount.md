# # OF21Response200OffersDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**discountPrice** | **float** | Discount price. Not to be read if discount with ranges is specified (i.e. discount with at least one range with quantity threshold greater than one). &lt;br/&gt;For Dropship specifically: the purchasing discount price. | [optional]
**endDate** | **\DateTime** | Discount end date | [optional]
**originPrice** | **float** | Origin price &lt;br/&gt;For Dropship specifically: the origin purchasing price | [optional]
**ranges** | [**\OpenAPI\Client\Mirakl\Model\OF21Response200OffersDiscountRanges[]**](OF21Response200OffersDiscountRanges.md) | Discount ranges &lt;br/&gt;Not applicable for Dropship offers | [optional]
**startDate** | **\DateTime** | Discount start date | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
