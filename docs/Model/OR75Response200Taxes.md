# # OR75Response200Taxes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Tax code | [optional]
**label** | **string** | Tax label | [optional]
**taxCalculationRule** | **string** | The type of automated calculation done during a partial refund or cancellation.&lt;br/&gt;Possible values:&lt;br/&gt;- none: No calculation will be done in case of partial refund or cancellation. You must provide the amount of tax you want to refund or cancel when you request a refund or cancellation. Otherwise, the tax will not get refunded/cancelled.&lt;br/&gt;- proportional_to_amount: Mirakl will automatically calculate the proportional tax amount when a refund or cancellation is requested. You do not need to provide the amount of this tax when you request a refund or cancellation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
