# # OF24RequestOffersDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endDate** | **string** | Discount end date. Offer update: if not provided, existing data will be deleted. | [optional]
**price** | **float** | Discount price. Not to be used when ranges are specified. Offer update: if not provided, existing data will be deleted. For Dropship specifically: the discount purchasing price of the offer, also referred to as discount cost or discount wholesale price. | [optional]
**ranges** | [**\OpenAPI\Client\Mirakl\Model\OF24RequestOffersDiscountRanges[]**](OF24RequestOffersDiscountRanges.md) | Discount ranges. Offer update: if not provided, existing data will be deleted. | [optional]
**startDate** | **string** | Discount start date. Offer update: if not provided, existing data will be deleted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
