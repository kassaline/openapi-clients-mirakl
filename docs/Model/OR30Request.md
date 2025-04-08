# # OR30Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancelations** | [**\OpenAPI\Client\Mirakl\Model\OR30RequestCancelations[]**](OR30RequestCancelations.md) | List of representations of cancellations to be created | [optional]
**orderTaxMode** | **string** | Please note: If the taxes are not specified, the prices with mode TAX_EXCLUDED and with mode TAX_INCLUDED will return the same amounts.&lt;br&gt;Possible values:&lt;ul&gt;&lt;li&gt;&lt;code&gt;TAX_EXCLUDED&lt;/code&gt;: the price fields (price, unit price, shipping price and order total prices) do not include taxes.&lt;/li&gt;&lt;li&gt;&lt;code&gt;TAX_INCLUDED&lt;/code&gt;: the price fields include the tax amounts. &lt;/li&gt;&lt;li&gt;If not specified, the default order tax mode of the platform is used.&lt;/li&gt;&lt;/ul&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
