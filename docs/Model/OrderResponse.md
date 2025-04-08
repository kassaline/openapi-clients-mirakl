# # OrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billingInfo** | [**\OpenAPI\Client\Mirakl\Model\BillingInfo**](BillingInfo.md) |  | [optional]
**channelOrderId** | **string** | Order identifier on the sales channel. This identifier is not guaranteed to be unique as multiple channels can use the same identifier. | [optional]
**channelUpdatedAt** | **\DateTime** | Date time the order was last updated on the sales channel (can differ from the modification date time in Connect). | [optional]
**createdAt** | **\DateTime** | Date time the order was created on the sales channel. | [optional]
**customAttributes** | [**\OpenAPI\Client\Mirakl\Model\CustomAttributeResponse[]**](CustomAttributeResponse.md) | Custom attributes | [optional]
**fulfillment** | [**\OpenAPI\Client\Mirakl\Model\Fulfillment**](Fulfillment.md) |  | [optional]
**id** | **string** | Unique order identifier used by Mirakl Connect. This identifier can be used as a primary key, but it must not be shared with final users. | [optional]
**orderLines** | [**\OpenAPI\Client\Mirakl\Model\OrderLineResponse[]**](OrderLineResponse.md) | Information about ordered products | [optional]
**origin** | [**\OpenAPI\Client\Mirakl\Model\Origin**](Origin.md) |  | [optional]
**shippingInfo** | [**\OpenAPI\Client\Mirakl\Model\ShippingInfo**](ShippingInfo.md) |  | [optional]
**status** | **string** | Current order status | [optional]
**statusReason** | **string** | Additional reason about the order status. Availability depends on the order status. | [optional]
**updatedAt** | **\DateTime** | Date time the order was last updated in Mirakl Connect. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
