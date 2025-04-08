# # PR01Response200Promotions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amountOff** | **float** | The amount off of the promotion. Only applicable when promotion is of type AMOUNT_OFF, null otherwise | [optional]
**applicationToCart** | [**\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsApplicationToCart[]**](PR01Response200PromotionsApplicationToCart.md) | If applicable, returns promo code associated to the promotion | [optional]
**campaign** | [**\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsCampaign**](PR01Response200PromotionsCampaign.md) |  | [optional]
**channels** | [**\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsChannels[]**](PR01Response200PromotionsChannels.md) | Channels on which the promotion is applied. If none, promotion applied on all channels | [optional]
**customerGroupIds** | **string[]** | The customer groups on which the promotion is applied. If none, promotion applies to all customer groups. | [optional]
**customerOrganizationIds** | **string[]** | The customer organizations on which the promotion is applied. If none, promotion applies to all customer organizations. | [optional]
**dateCreated** | **\DateTime** | Creation date of the promotion | [optional]
**endDate** | **\DateTime** | End date of the promotion period of activity | [optional]
**freeItemsQuantity** | **int** | The free item target quantity of the promotion. Only applicable when promotion is of type FREE_ITEMS, null otherwise | [optional]
**internalDescription** | **string** | Internal description of the promotion, set by the shop | [optional]
**internalId** | **string** | Promotion identifier | [optional]
**lastUpdated** | **\DateTime** | Last update date of the promotion | [optional]
**maxQuantityToDiscount** | **int** | Maximum quantity of items on which a percentage off discount applies. Only applicable when promotion is of type PERCENTAGE_OFF, null otherwise | [optional]
**medias** | [**\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsMedias[]**](PR01Response200PromotionsMedias.md) | The medias associated with this promotion, with the locales they apply to | [optional]
**percentageOff** | **float** | The percentage off of the promotion. Only applicable when promotion is of type PERCENTAGE_OFF, null otherwise | [optional]
**publicDescriptions** | [**\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsPublicDescriptions[]**](PR01Response200PromotionsPublicDescriptions.md) | The public descriptions of the promotion, with the locales they apply to | [optional]
**rewardOfferIds** | **int[]** | Offers used as reward in the promotion, according to the requested reward_offer_ids | [optional]
**rewardOnPurchasedItems** | **bool** | Specifies if the promotion&#39;s reward applies to purchased items or to a specific selection | [optional]
**startDate** | **\DateTime** | Start date of the promotion period of activity | [optional]
**state** | **string** | Promotion state | [optional]
**triggerOfferIds** | **int[]** | Offers which trigger the promotion, according to the requested trigger_offer_ids | [optional]
**triggers** | [**\OpenAPI\Client\Mirakl\Model\PR01Response200PromotionsTriggers[]**](PR01Response200PromotionsTriggers.md) | Triggers of the promotion | [optional]
**type** | **string** | Promotion type | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
