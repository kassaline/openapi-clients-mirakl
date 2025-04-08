# # DR12Response200Data

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deliveryBillInformation** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataDeliveryBillInformation[]**](DR12Response200DataDeliveryBillInformation.md) | Delivery billing information | [optional]
**ecoContributions** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataEcoContributions[]**](DR12Response200DataEcoContributions.md) | List of eco-contribution amounts and corresponding producer identifiers, if applicable&lt;br/&gt; Only available if the operator activates the circular economy information collection. | [optional]
**entityId** | **string** | The entity id the document line relates to | [optional]
**entityType** | **string** | The entity type the document line relates to | [optional]
**feesExcludingTaxes** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataFeesExcludingTaxes[]**](DR12Response200DataFeesExcludingTaxes.md) | List of fees applied on the order line | [optional]
**order** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataOrder**](DR12Response200DataOrder.md) |  | [optional]
**orderLine** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataOrderLine**](DR12Response200DataOrderLine.md) |  | [optional]
**originUnitPriceExcludingTaxes** | **float** | The original unit price excluding tax of the offer associated with the order line | [optional]
**originUnitPriceIncludingTaxes** | **float** | The original unit price including tax of the offer associated with the order line | [optional]
**paymentState** | **string** | Document request line payment status | [optional]
**priceExcludingTaxes** | **float** | The price excluding taxes after promotions | [optional]
**product** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataProduct**](DR12Response200DataProduct.md) |  | [optional]
**quantity** | **int** | The quantity of the document line | [optional]
**shippingFrom** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataShippingFrom**](DR12Response200DataShippingFrom.md) |  | [optional]
**shippingPriceExcludingTaxes** | **float** | The shipping price excluding taxes | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataShippingTaxes[]**](DR12Response200DataShippingTaxes.md) | The shipping taxes | [optional]
**shop** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataShop**](DR12Response200DataShop.md) |  | [optional]
**taxLegalNotice** | **string** | The legal notice applying to the offer’s tax calculation | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\DR12Response200DataTaxes[]**](DR12Response200DataTaxes.md) | The taxes | [optional]
**totalPriceIncludingTaxes** | **float** | The total price | [optional]
**unitPriceExcludingTaxes** | **float** | The unit price excluding taxes after promotions | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
