# # UnitPatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\OpenAPI\Client\Mirakl\Model\WriteableUnitStatuses**](WriteableUnitStatuses.md) |  | [optional]
**amount** | **int** | Amount of available Units | [optional]
**handlingTime** | **int** | handling time | [optional]
**listingPrice** | **int** | Listing price, in integral cents of the storefront&#39;s currency (CZK for cz, EUR for de, sk, at and PLN for pl). Minimum 1 cent, maximum differs by storefront (25 million CZK, 1 million EUR or 4.5 million PLN). | [optional]
**minimumPrice** | **int** | Minimum price, in integral cents of the storefront&#39;s currency. Only relevant if you want to use Smart Pricing. | [optional]
**note** | **string** | A note for this unit | [optional]
**idShippingGroup** | **int** | ID of the shipping group | [optional]
**idWarehouse** | **int** | ID of warehouse | [optional]
**vatIndicator** | [**\OpenAPI\Client\Mirakl\Model\WriteableVatIndicator**](WriteableVatIndicator.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
