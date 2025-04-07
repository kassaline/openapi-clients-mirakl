# # UnitEmbedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\OpenAPI\Client\Mirakl\Model\UnitStatuses**](UnitStatuses.md) |  |
**currency** | [**\OpenAPI\Client\Mirakl\Model\Currency**](Currency.md) |  |
**condition** | [**\OpenAPI\Client\Mirakl\Model\UnitCondition**](UnitCondition.md) |  |
**idUnit** | **int** | Internal ID of Unit, unique across all Units |
**note** | **string** | A note for this unit |
**listingPrice** | **int** | Listing price, available only for Seller |
**minimumPrice** | **int** | Minimum price, available only for Seller with Smart Pricing feature enabled |
**price** | **int** | Price at which this unit will be offered on Kaufland.de |
**idOffer** | **string** | Seller&#39;s unique ID for offer(s) |
**idProduct** | **int** | Internal ID of Product, unique across all Products |
**idShippingGroup** | **int** | ID of the shipping group |
**idWarehouse** | **int** | ID of warehouse |
**amount** | **int** | Amount of available Units |
**dateInsertedIso** | **\DateTime** | DateTime when unit was created |
**dateLastchangeIso** | **\DateTime** | DateTime when unit has been edited for the last time |
**handlingTime** | **int** | handling time |
**shippingRate** | **int** |  |
**storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](Storefront.md) |  |
**transportTimeMin** | **int** | Transport time minimum |
**transportTimeMax** | **int** | Transport time maximum |
**product** | [**\OpenAPI\Client\Mirakl\Model\Product**](Product.md) |  | [optional]
**fulfillmentType** | [**\OpenAPI\Client\Mirakl\Model\FulfillmentType**](FulfillmentType.md) |  |
**vatIndicator** | [**\OpenAPI\Client\Mirakl\Model\VatIndicator**](VatIndicator.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
