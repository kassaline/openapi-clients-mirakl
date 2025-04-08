# # P11Response200ProductsOffersAllPrices

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**\OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffersAllPricesContext**](P11Response200ProductsOffersAllPricesContext.md) |  | [optional]
**discountEndDate** | **\DateTime** | End date of the discount, or null if no discount exists or if the discount does not have an end date. | [optional]
**discountStartDate** | **\DateTime** | Start date of the discount, or null if no discount exists or if the discount does not have a start date. | [optional]
**price** | **float** | Price of the offer. &lt;br/&gt; For Dropship specifically: the purchasing price of the offer &lt;br/&gt; If a discount is defined and is currently active (within the validity interval), it represents the unit_discount_price. &lt;br/&gt; In other cases, it represents the unit_origin_price. | [optional]
**unitDiscountPrice** | **float** | Discount price for a quantity of one, i.e. the discount price for a quantity of one. &lt;br/&gt; For Dropship specifically: the discount purchasing price for a quantity of one &lt;br/&gt; Set to null if no discount is defined or if no discount price for a quantity of one is defined. | [optional]
**unitOriginPrice** | **float** | Original price for a quantity of one, i.e. the price for a quantity of one regardless of the discounts. &lt;br/&gt; For Dropship specifically: the purchasing price for a quantity of one, also referred to as cost or wholesale price | [optional]
**volumePrices** | [**\OpenAPI\Client\Mirakl\Model\P11Response200ProductsOffersAllPricesVolumePrices[]**](P11Response200ProductsOffersAllPricesVolumePrices.md) | Volume prices for each quantity threshold. Returns at least the price for a quantity threshold of one. &lt;br/&gt; Not applicable for Dropship offers | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
