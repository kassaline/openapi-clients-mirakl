# # A02Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\OpenAPI\Client\Mirakl\Model\A02RequestAddress**](A02RequestAddress.md) |  | [optional]
**channels** | **string[]** | List of the channel codes associated to the shop. | [optional]
**closedFrom** | **\DateTime** | Date: if defined, this shop will be closed on this date. Nullable. | [optional]
**closedTo** | **\DateTime** | Date: if defined, this shop will be reopened on this date. Nullable. | [optional]
**description** | **string** | Description of the shop. Nullable. | [optional]
**email** | **string** | Email of the shop. Cannot be null. | [optional]
**fax** | **string** | Fax of the shop. Nullable. | [optional]
**isProfessional** | **bool** | Whether or not the shop is professional. Cannot be null. | [optional]
**paymentInfo** | [**\OpenAPI\Client\Mirakl\Model\A02RequestPaymentInfo**](A02RequestPaymentInfo.md) |  | [optional]
**proDetails** | [**\OpenAPI\Client\Mirakl\Model\A02RequestProDetails**](A02RequestProDetails.md) |  | [optional]
**producerIdentifiers** | [**\OpenAPI\Client\Mirakl\Model\A02RequestProducerIdentifiers[]**](A02RequestProducerIdentifiers.md) | List of shop’s producer identifiers per Extended Producer Responsibility (EPR) categories. Only available if the operator setting &lt;em&gt;Activate data collection related to circular economy regulations&lt;/em&gt; is enabled. | [optional]
**recyclingPolicy** | **string** | Recycling policy - only available if the operator setting &lt;em&gt;Activate data collection related to circular economy regulations&lt;/em&gt; has been enabled. | [optional]
**returnPolicy** | **string** | Return policy of the shop. Nullable. | [optional]
**shippingCountry** | **string** | Shipping country of the shop. Nullable. | [optional]
**shopAdditionalFields** | [**\OpenAPI\Client\Mirakl\Model\A02RequestShopAdditionalFields[]**](A02RequestShopAdditionalFields.md) | Additional fields of the shop. Note that if the &#39;value&#39; field in the child structure is absent, the corresponding additional field value will be removed for this shop. Nullable. | [optional]
**shopName** | **string** | The name of the shop. Cannot be null. | [optional]
**webSite** | **string** | Website of the shop. Nullable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
