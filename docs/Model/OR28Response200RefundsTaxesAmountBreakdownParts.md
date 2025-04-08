# # OR28Response200RefundsTaxesAmountBreakdownParts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Part&#39;s amount. The sum of each part&#39;s amount is equal to the total amount. | [optional]
**commissionable** | **bool** | Should this amount be applied to the sellers commissions calculation. | [optional]
**debitableFromCustomer** | **bool** | Should this amount be debited to the customer. &lt;br/&gt;If true, the amount is taken into account when generating the debit file.&lt;br/&gt;If false, the amount is not taken into account when generating the debit file. | [optional]
**payableToShop** | **bool** | Should this amount be paid to the shop. &lt;br/&gt;If true, the amount is taken into account when generating the shop payment voucher.&lt;br/&gt;If false, the amount is not taken into account when generating the shop payment voucher. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
