# # PC01Response200Features

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**circularEconomyDataCollection** | **bool** | Allows operators to collect data related to the circular economy regulation | [optional]
**competitivePricingTool** | **bool** | The competitive pricing tool allows stores to view and possibly match competing Marketplace offers | [optional]
**directPaymentCustomerStore** | [**\OpenAPI\Client\Mirakl\Model\PC01Response200FeaturesDirectPaymentCustomerStore**](PC01Response200FeaturesDirectPaymentCustomerStore.md) |  | [optional]
**disableSellerAlternativeCarrier** | **bool** | Prevent stores from specifying alternatives carriers outside those predefined by the operator | [optional]
**kycStatusPerSeller** | **bool** | Allows PSPs to provide operators with seller KYC statuses | [optional]
**leadTimeToShipBySellersEnabled** | **string** | Allows sellers to override the default lead time to ship | [optional]
**multiCurrency** | **bool** | Defines if platform support multi currencies | [optional]
**noReplyNeeded** | **bool** | Allows to end order-related conversations when the last message sent from customer does not specifically require a reply | [optional]
**offerPricesDecimals** | **string** | Defines maximum number of decimals in offer prices | [optional]
**operatorCsvDelimiter** | **string** | The delimiter used in the CSV files exported from the back office. COMMA: &#39;,&#39; delimiter. SEMICOLON: &#39;;&#39; delimiter. | [optional]
**orderConditions** | [**\OpenAPI\Client\Mirakl\Model\PC01Response200FeaturesOrderConditions**](PC01Response200FeaturesOrderConditions.md) |  | [optional]
**orderTaxMode** | **string** | Prices with tax included or excluded in order-related APIs. TAX_INCLUDED: Prices with tax included. TAX_EXCLUDED: Prices with tax excluded. | [optional]
**orderWorkflows** | [**\OpenAPI\Client\Mirakl\Model\PC01Response200FeaturesOrderWorkflows**](PC01Response200FeaturesOrderWorkflows.md) |  | [optional]
**paymentConfirmation** | **bool** | Allows the operator to mark an accounting document as \&quot;Paid\&quot; when the corresponding amount is confirmed to be paid to the seller | [optional]
**pricing** | [**\OpenAPI\Client\Mirakl\Model\PC01Response200FeaturesPricing**](PC01Response200FeaturesPricing.md) |  | [optional]
**productDataValidationByChannel** | **bool** | Facilitates the management of attributes in a multilingual context | [optional]
**shipment** | [**\OpenAPI\Client\Mirakl\Model\PC01Response200FeaturesShipment**](PC01Response200FeaturesShipment.md) |  | [optional]
**shopTaxOptions** | [**\OpenAPI\Client\Mirakl\Model\PC01Response200FeaturesShopTaxOptions**](PC01Response200FeaturesShopTaxOptions.md) |  | [optional]
**taxCollection** | [**\OpenAPI\Client\Mirakl\Model\PC01Response200FeaturesTaxCollection**](PC01Response200FeaturesTaxCollection.md) |  | [optional]
**taxIdNumber** | [**\OpenAPI\Client\Mirakl\Model\PC01Response200FeaturesTaxIdNumber**](PC01Response200FeaturesTaxIdNumber.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
