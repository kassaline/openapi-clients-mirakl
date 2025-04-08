# # TL02Response200DataEntitiesShopTax

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The code of the shop tax applied. &lt;br/&gt; Nb: This field will be set for line of type &lt;code&gt;COMMISSION_VAT&lt;/code&gt;, &lt;code&gt;MANUAL_CREDIT_VAT&lt;/code&gt;, &lt;code&gt;MANUAL_INVOICE_VAT&lt;/code&gt;, &lt;code&gt;REFUND_COMMISSION_VAT&lt;/code&gt;, &lt;code&gt;SUBSCRIPTION_VAT&lt;/code&gt; | [optional]
**rate** | **float** | Shop tax rate applied &lt;br/&gt; Nb: This field will be set for line of type &lt;code&gt;COMMISSION_VAT&lt;/code&gt;, &lt;code&gt;MANUAL_CREDIT_VAT&lt;/code&gt;, &lt;code&gt;MANUAL_INVOICE_VAT&lt;/code&gt;, &lt;code&gt;REFUND_COMMISSION_VAT&lt;/code&gt;, &lt;code&gt;SUBSCRIPTION_VAT&lt;/code&gt;&lt;br/&gt;For backward-compatibility reason, this field will be filled for lines of type &lt;code&gt;COMMISSION_FEE&lt;/code&gt; with the rate of the first taxapplied to the shop. In this case, the value should be ignored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
