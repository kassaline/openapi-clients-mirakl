# # ST01Response201ShipmentSuccessTracking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrierCode** | **string** | The code of a carrier. This information is mandatory for a registered carrier. | [optional]
**carrierName** | **string** | The name of a carrier. This information is mandatory for an unregistered carrier. | [optional]
**carrierStandardCode** | **string** | The standard code of a carrier based on mirakl carrier referential | [optional]
**lastKnownLocation** | [**\OpenAPI\Client\Mirakl\Model\ST01Response201ShipmentSuccessTrackingLastKnownLocation**](ST01Response201ShipmentSuccessTrackingLastKnownLocation.md) |  | [optional]
**milestones** | [**\OpenAPI\Client\Mirakl\Model\ST01Response201ShipmentSuccessTrackingMilestones[]**](ST01Response201ShipmentSuccessTrackingMilestones.md) | Retrieves the main stages of the delivery of a shipment coming from carrier&#39;s systems | [optional]
**trackingNumber** | **string** | The carrier tracking number. This information is mandatory for a registered carrier with a URL requiring a tracking number. | [optional]
**trackingUrl** | **string** | The tracking url of a carrier. This information is unused for registered carriers (because computed automatically). This information is optional for unregistered carriers. | [optional]
**validityStatus** | **string** | Retrieves if mirakl is able to get tracking information (if not, then unverified) and if we manage to get tracking information and if we do get tracking information on this tracking, then it moves to verified, if we don&#39;t it remains in unverified | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
