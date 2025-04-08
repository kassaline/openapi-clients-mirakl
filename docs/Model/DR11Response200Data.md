# # DR11Response200Data

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currencyIsoCode** | **string** | The currency of the document request | [optional]
**dateCreated** | **\DateTime** | The document request creation date | [optional]
**documentDetails** | [**\OpenAPI\Client\Mirakl\Model\DR11Response200DataDocumentDetails[]**](DR11Response200DataDocumentDetails.md) | The document details | [optional]
**documentNumber** | **string** | The accounting document number | [optional]
**documentUploadDate** | **\DateTime** | The last upload date of the accounting document | [optional]
**dueDate** | **\DateTime** | The document due date | [optional]
**entities** | [**\OpenAPI\Client\Mirakl\Model\DR11Response200DataEntities**](DR11Response200DataEntities.md) |  | [optional]
**entityDateCreated** | **\DateTime** | The entity creation date, not applicable for entity_type&#x3D;SHOP_BILLING_CYCLE_PURCHASE_ORDER | [optional]
**entityId** | **string** | The entity id the document request relates to | [optional]
**entityType** | **string** | The entity type the document request relates to | [optional]
**id** | **string** | The document request unique identifier | [optional]
**initialDocuments** | [**\OpenAPI\Client\Mirakl\Model\DR11Response200DataInitialDocuments[]**](DR11Response200DataInitialDocuments.md) | In the case of &lt;code&gt;CREDIT_NOTE&lt;/code&gt; or reissued &lt;code&gt;INVOICE&lt;/code&gt;, information about the initial accounting documents | [optional]
**initialPaymentState** | **string** | The document request payment state at the time when the document request was created | [optional]
**issueDate** | **\DateTime** | The document issue date | [optional]
**issuer** | [**\OpenAPI\Client\Mirakl\Model\DR11Response200DataIssuer**](DR11Response200DataIssuer.md) |  | [optional]
**lastUpdated** | **\DateTime** | The document request last update date | [optional]
**payment** | [**\OpenAPI\Client\Mirakl\Model\DR11Response200DataPayment**](DR11Response200DataPayment.md) |  | [optional]
**paymentDestination** | [**\OpenAPI\Client\Mirakl\Model\DR11Response200DataPaymentDestination**](DR11Response200DataPaymentDestination.md) |  | [optional]
**paymentTerms** | [**\OpenAPI\Client\Mirakl\Model\DR11Response200DataPaymentTerms**](DR11Response200DataPaymentTerms.md) |  | [optional]
**recipient** | [**\OpenAPI\Client\Mirakl\Model\DR11Response200DataRecipient**](DR11Response200DataRecipient.md) |  | [optional]
**state** | **string** | The document request state | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\DR11Response200DataTaxes[]**](DR11Response200DataTaxes.md) | Total amount of taxes aggregated per tax code and rate | [optional]
**totalAmountExcludingTaxes** | **float** | The total document amount (excluding taxes) | [optional]
**totalAmountIncludingTaxes** | **float** | The total document amount (including taxes) | [optional]
**totalTaxAmount** | **float** | The total taxes amount of the document | [optional]
**type** | **string** | The accounting document type | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
