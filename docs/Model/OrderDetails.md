# # OrderDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idOrder** | **string** |  |
**tsCreatedIso** | **\DateTime** |  |
**isMarketplaceDeemedSupplier** | **bool** |  |
**storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](Storefront.md) |  |
**fulfillmentType** | [**\OpenAPI\Client\Mirakl\Model\FulfillmentType**](FulfillmentType.md) |  |
**orderUnits** | [**\OpenAPI\Client\Mirakl\Model\OrderDetailsOrderUnitsInner[]**](OrderDetailsOrderUnitsInner.md) |  |
**billingAddress** | [**\OpenAPI\Client\Mirakl\Model\Address**](Address.md) |  |
**shippingAddress** | [**\OpenAPI\Client\Mirakl\Model\Address**](Address.md) |  |
**buyer** | [**\OpenAPI\Client\Mirakl\Model\Buyer**](Buyer.md) |  |
**orderInvoices** | [**\OpenAPI\Client\Mirakl\Model\OrderInvoice[]**](OrderInvoice.md) |  | [optional]
**delivery** | [**\OpenAPI\Client\Mirakl\Model\Delivery**](Delivery.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
