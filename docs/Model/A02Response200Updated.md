# # A02Response200Updated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedAddress**](A02Response200UpdatedAddress.md) |  | [optional]
**channels** | **string[]** | List of the channel codes associated to the shop | [optional]
**closedFrom** | **\DateTime** | The start date of the closing of the shop | [optional]
**closedTo** | **\DateTime** | The end date of the closing of the shop | [optional]
**defaultBillingInformation** | [**\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedDefaultBillingInformation**](A02Response200UpdatedDefaultBillingInformation.md) |  | [optional]
**description** | **string** | Shop description | [optional]
**email** | **string** | Shop email | [optional]
**fax** | **string** | Shop fax | [optional]
**isProfessional** | **bool** | Whether or not the shop is professional | [optional]
**model** | **string** | Shop platform model, current possible values : &lt;ul&gt;     &lt;li&gt;&lt;code&gt;MARKETPLACE&lt;/code&gt;&lt;/li&gt;     &lt;li&gt;&lt;code&gt;DROPSHIP&lt;/code&gt;&lt;/li&gt;     &lt;li&gt;&lt;code&gt;ONE_CREDITOR&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt; | [optional]
**paymentInfo** | [**\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedPaymentInfo**](A02Response200UpdatedPaymentInfo.md) |  | [optional]
**paymentMethodMandatory** | **bool** | Payment method is mandatory | [optional]
**proDetails** | [**\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedProDetails**](A02Response200UpdatedProDetails.md) |  | [optional]
**producerIdentifiers** | [**\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedProducerIdentifiers[]**](A02Response200UpdatedProducerIdentifiers.md) | List of shop’s producer identifiers per Extended Producer Responsibility (EPR) categories. Only available if the operator setting &lt;em&gt;Activate data collection related to circular economy regulations&lt;/em&gt; is enabled. | [optional]
**recyclingPolicy** | **string** | &lt;span&gt;Recycling policy of the shop - only available if the operator setting &lt;/span&gt;&lt;em&gt;Activate data collection related to circular economy regulations&lt;/em&gt;&lt;span&gt; has been enabled.&lt;/span&gt; | [optional]
**returnPolicy** | **string** | Return policy of the shop | [optional]
**shipping** | [**\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedShipping**](A02Response200UpdatedShipping.md) |  | [optional]
**shippingCountry** | **string** | Shipping country of the shop | [optional]
**shopAdditionalFields** | [**\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedShopAdditionalFields[]**](A02Response200UpdatedShopAdditionalFields.md) | Additional fields of the shop | [optional]
**shopName** | **string** | Shop name | [optional]
**specificBillingInformations** | [**\OpenAPI\Client\Mirakl\Model\A02Response200UpdatedSpecificBillingInformations[]**](A02Response200UpdatedSpecificBillingInformations.md) | The list of specific billing information of the shop, used for invoicing and reporting purposes &lt;br/&gt;&lt;i&gt;Applies only when the shop is &lt;code&gt;professional&lt;/code&gt;&lt;/i&gt; | [optional]
**webSite** | **string** | Shop website | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
