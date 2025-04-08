# # IV01Response200Invoices

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currencyIsoCode** | **string** | The currency of the shop | [optional]
**dateCreated** | **\DateTime** | Accounting document creation date | [optional]
**details** | [**\OpenAPI\Client\Mirakl\Model\IV01Response200InvoicesDetails[]**](IV01Response200InvoicesDetails.md) | Accounting details | [optional]
**dueDate** | **\DateTime** | Due date for the payment of the accounting document | [optional]
**id** | **string** | Accounting document identifier (use it for draft document) | [optional]
**invoiceId** | **int** | Accounting document identifier (present if the accounting document is issued) | [optional]
**issueDate** | **\DateTime** | Issue date of an accounting document | [optional]
**issuingUser** | [**\OpenAPI\Client\Mirakl\Model\IV01Response200InvoicesIssuingUser**](IV01Response200InvoicesIssuingUser.md) |  | [optional]
**payment** | [**\OpenAPI\Client\Mirakl\Model\IV01Response200InvoicesPayment**](IV01Response200InvoicesPayment.md) |  | [optional]
**shopAddress** | [**\OpenAPI\Client\Mirakl\Model\IV01Response200InvoicesShopAddress**](IV01Response200InvoicesShopAddress.md) |  | [optional]
**shopCorporateName** | **string** | Shop corporate name if it is a professional shop | [optional]
**shopId** | **int** | Shop id | [optional]
**shopModel** | **string** | Shop model | [optional]
**shopName** | **string** | Shop name | [optional]
**shopOperatorInternalId** | **string** | Operator internal id for the shop | [optional]
**shopTaxNumber** | **string** | Shop tax number if it is a professional shop | [optional]
**state** | **string** | Accounting document state | [optional]
**totalAmountExclTaxes** | **float** | Total amount charged to the shop (excluding taxes) | [optional]
**totalAmountInclTaxes** | **float** | Total amount charged to the shop (including taxes) | [optional]
**totalTaxes** | [**\OpenAPI\Client\Mirakl\Model\IV01Response200InvoicesTotalTaxes[]**](IV01Response200InvoicesTotalTaxes.md) | Total taxes | [optional]
**type** | **string** | Accounting document type | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
