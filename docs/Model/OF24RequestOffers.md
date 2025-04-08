# # OF24RequestOffers

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allPrices** | [**\OpenAPI\Client\Mirakl\Model\OF24RequestOffersAllPrices[]**](OF24RequestOffersAllPrices.md) | The volume and channel prices. Not applicable for Dropship offers. | [optional]
**allowQuoteRequests** | **bool** | Whether the offer is eligible for quotation. Offer update: if not provided, will be set to false. | [optional]
**availableEnded** | **string** | End date of the period of availability. Offer update: if not provided, existing data will be deleted. | [optional]
**availableStarted** | **string** | Started date of the period of availability. Offer update: if not provided, existing data will be deleted. | [optional]
**description** | **string** | Description of the offer. Offer update: if not provided, existing data will be deleted. | [optional]
**discount** | [**\OpenAPI\Client\Mirakl\Model\OF24RequestOffersDiscount**](OF24RequestOffersDiscount.md) |  | [optional]
**ecoContributions** | [**\OpenAPI\Client\Mirakl\Model\OF24RequestOffersEcoContributions[]**](OF24RequestOffersEcoContributions.md) | Eco-contributions of the offer - only available if the operator setting &lt;em&gt;Activate data collection related to circular economy regulations&lt;/em&gt; has been enabled. Offer update: if not provided, existing data will be deleted. | [optional]
**internalDescription** | **string** | Internal description of the offer. Offer update: if not provided, existing data will be deleted. | [optional]
**leadtimeToShip** | **int** | Leadtime to ship of the offer, in days. Offer update: if not provided, existing data will be deleted. | [optional]
**logisticClass** | **string** | Offer logistic class. Offer update: if not provided, existing data will be deleted. | [optional]
**maxOrderQuantity** | **int** | The maximum quantity of product items per order. Offer update: if not provided, existing data will be deleted. | [optional]
**minOrderQuantity** | **int** | The minimum quantity of product items per order. Offer update: if not provided, existing data will be deleted. | [optional]
**minQuantityAlert** | **int** | The minimum stock level that triggers an email alert. No alerts are sent if this field is not specified. Offer update: if not provided, existing data will be deleted. | [optional]
**offerAdditionalFields** | [**\OpenAPI\Client\Mirakl\Model\OF24RequestOffersOfferAdditionalFields[]**](OF24RequestOffersOfferAdditionalFields.md) | Custom fields of the offer | [optional]
**packageQuantity** | **int** | The indivisible selling quantity of the same product. Offer update: if not provided, existing data will be deleted. | [optional]
**price** | **float** | Price of the offer. For Dropship specifically: the purchasing price of the offer, also referred to as cost or wholesale price. | [optional]
**priceAdditionalInfo** | **string** | Price additional information of the offer. Offer update: if not provided, existing data will be deleted. | [optional]
**pricingUnit** | **string** | The unit corresponding to the submitted price when the price per measurement unit feature is used. | [optional]
**productId** | **string** | Reference of the product associated with the offer. Required at offer creation. Optional at offer update. | [optional]
**productIdType** | **string** | Reference type of the product associated with the offer. Required at offer creation. Optional at offer update. | [optional]
**productTaxCode** | **string** | Product tax code associated to the offer. When Operator mandatorily collects product tax codes on offers, required at offer creation and update. When Operator optionally collects product tax codes on offers, if no value is provided at offer update, existing data will be deleted. | [optional]
**quantity** | **int** | Quantity available of the offer. Offer update: if not provided, will be set to 0. | [optional]
**shopSku** | **string** | Sku of the offer | [optional]
**stateCode** | **string** | State of the offer | [optional]
**updateDelete** | **string** | Update delete flag. Could be empty (means \&quot;update\&quot;), \&quot;update\&quot; or \&quot;delete\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
