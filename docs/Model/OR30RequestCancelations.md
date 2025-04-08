# # OR30RequestCancelations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The offer part amount to be canceled | [optional]
**currencyIsoCode** | **string** | The currency (iso format) used by the shop (the field is required if the shop is not using the default Operator platform currency) | [optional]
**fees** | [**\OpenAPI\Client\Mirakl\Model\OR30RequestCancelationsFees[]**](OR30RequestCancelationsFees.md) | The fees to be canceled | [optional]
**orderLineId** | **string** | Order line&#39;s identifier that must be canceled | [optional]
**quantity** | **int** | The quantity of goods to cancel | [optional]
**reasonCode** | **string** | Cancellation&#39;s reason code | [optional]
**shippingAmount** | **float** | The shipping charges part amount to be canceled | [optional]
**shippingTaxes** | [**\OpenAPI\Client\Mirakl\Model\OR30RequestCancelationsShippingTaxes[]**](OR30RequestCancelationsShippingTaxes.md) | The taxes to be canceled on the shipping price (this field is required if the order has shipping taxes) | [optional]
**taxes** | [**\OpenAPI\Client\Mirakl\Model\OR30RequestCancelationsTaxes[]**](OR30RequestCancelationsTaxes.md) | The taxes to be canceled on the product price (this field is required if the order has taxes) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
