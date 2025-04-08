# # ShipmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier** | **string** | Carrier company name | [optional]
**channelShipmentId** | **string** | Shipment identifier on the sales channel. This identifier is unique for a sales channel, but multiple channels can use the same identifier. | [optional]
**createdAt** | **\DateTime** | Shipment creation date | [optional]
**id** | **string** | Unique shipment identifier used by Connect. This identifier can be used as a primary key, but it must not be shared with final users. | [optional]
**items** | [**\OpenAPI\Client\Mirakl\Model\ShipmentItemResponse[]**](ShipmentItemResponse.md) | Items to ship | [optional]
**trackingNumber** | **string** | Carrier tracking number | [optional]
**trackingUrl** | **string** | Carrier tracking URL | [optional]
**updatedAt** | **\DateTime** | Date of last shipment modification | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
