# # UnitRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Amount of available Units | [optional]
**handlingTime** | **int** | handling time |
**listingPrice** | **int** | Listing price, in integral cents of the storefront&#39;s currency (CZK for cz, EUR for de, sk, at and PLN for pl). Minimum 1 cent, maximum differs by storefront (25 million CZK, 1 million EUR or 4.5 million PLN). |
**minimumPrice** | **int** | Minimum price, in integral cents of the storefront&#39;s currency. Only relevant if you want to use Smart Pricing. | [optional]
**note** | **string** | A note for this unit | [optional]
**idShippingGroup** | **int** | ID of the shipping group | [optional]
**idWarehouse** | **int** | ID of warehouse | [optional]
**ean** | **string** | EAN, 13 or 14 digits | [optional]
**idProduct** | **int** | Internal ID of Product, unique across all Products | [optional]
**idOffer** | **string** | Seller&#39;s unique ID for offer(s) |
**condition** | [**\OpenAPI\Client\Mirakl\Model\UnitRequestCondition**](UnitRequestCondition.md) |  | [optional]
**vatIndicator** | [**\OpenAPI\Client\Mirakl\Model\WriteableVatIndicator**](WriteableVatIndicator.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
