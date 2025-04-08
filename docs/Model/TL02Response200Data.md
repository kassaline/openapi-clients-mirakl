# # TL02Response200Data

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountingDocumentCreationDate** | **\DateTime** | The billing cycle&#39;s accounting document creation date | [optional]
**accountingDocumentId** | **string** | The billing cycle&#39;s accounting document id. This field is only available for documents requests of the type: &lt;code&gt;SHOP_BILLING_CYCLE_PURCHASE_ORDER&lt;/code&gt;. | [optional]
**accountingDocumentNumber** | **string** | The billing cycle&#39;s accounting document number | [optional]
**amount** | **int** | The amount. | [optional]
**amountCredited** | **int** | The amount credited. | [optional]
**amountDebited** | **int** | The amount debited. | [optional]
**balance** | **int** | The balance of the transaction. | [optional]
**currencyIsoCode** | **string** | The currency of the shop (iso format) | [optional]
**dateCreated** | **\DateTime** | Creation date of the transaction line | [optional]
**entities** | [**\OpenAPI\Client\Mirakl\Model\TL02Response200DataEntities**](TL02Response200DataEntities.md) |  | [optional]
**id** | **string** | Identifier of the transaction | [optional]
**lastUpdated** | **\DateTime** | Date of last update of the transaction line | [optional]
**paymentState** | **string** | The payment state of the transaction. | [optional]
**type** | **string** | Type of transaction (refund, transaction fee, etc ...) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
