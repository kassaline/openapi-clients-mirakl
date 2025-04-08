# # TL03Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountingDocumentId** | **string** | Accounting document id for filtering. This parameter only filter documents requests of the type: &lt;code&gt;SHOP_BILLING_CYCLE_PURCHASE_ORDER&lt;/code&gt;. | [optional]
**accountingDocumentNumber** | **string** | Accounting document number for filtering. | [optional]
**dateCreatedFrom** | **\DateTime** | Creation date for filtering | [optional]
**dateCreatedTo** | **\DateTime** | Creation date for filtering | [optional]
**itemsPerChunk** | **int** | The maximum number of items per chunk. | [optional]
**lastUpdatedFrom** | **\DateTime** | Last updated date for filtering | [optional]
**megabytesPerChunk** | **int** | The maximum size in megabytes of a chunk. | [optional]
**orderId** | **string[]** | Order id for filtering. This parameter can be supplied multiple times. | [optional]
**orderLineId** | **string[]** | Order line id for filtering. This parameter can be supplied multiple times. | [optional]
**orderReferenceForCustomer** | **string[]** | A comma-separated list of order references for customer. | [optional]
**orderReferenceForSeller** | **string[]** | A comma-separated list of order references for seller. | [optional]
**paymentState** | **string[]** | Payment state for filtering. This parameter can be supplied multiple times. | [optional]
**paymentVoucherNumber** | **string** | Payment voucher for filtering | [optional]
**shopDomain** | **string[]** | A shop domain for filtering. This parameter can be supplied multiple times. | [optional]
**shopId** | **int** | Shop identifier | [optional]
**shopModel** | **string[]** | Shop model for filtering. This parameter can be supplied multiple times. | [optional]
**transactionDateFrom** | **\DateTime** | Transaction date for filtering | [optional]
**transactionDateTo** | **\DateTime** | Transaction date for filtering | [optional]
**transactionType** | **string[]** | Transaction type for filtering. This parameter can be supplied multiple times. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
