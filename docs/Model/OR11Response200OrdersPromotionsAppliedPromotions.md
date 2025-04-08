# # OR11Response200OrdersPromotionsAppliedPromotions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apportioned** | **bool** | &lt;code&gt;true&lt;/code&gt; when the promotion&#39;s reward amount is divided and allocated proportionally to multiple order lines.&lt;br&gt;&lt;code&gt;false&lt;/code&gt; when the entire reward amount is allocated to one order line, or when the same discount percentage is applied to several order lines (one-step percentage off promotions). | [optional]
**campaign** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersPromotionsAppliedPromotionsCampaign**](OR11Response200OrdersPromotionsAppliedPromotionsCampaign.md) |  | [optional]
**configuration** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersPromotionsAppliedPromotionsConfiguration**](OR11Response200OrdersPromotionsAppliedPromotionsConfiguration.md) |  | [optional]
**deducedAmount** | **float** | Promotion&#39;s amount for this line. | [optional]
**id** | **string** | Promotion&#39;s id, defined by the shop | [optional]
**offeredQuantity** | **int** | The quantity of free items offered by the promotion for this line. &lt;br/&gt;Only applicable when promotion is of type &lt;code&gt;FREE_ITEMS&lt;/code&gt;, null otherwise. | [optional]
**promoCode** | **string** | Promo code associated to the promotion | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
