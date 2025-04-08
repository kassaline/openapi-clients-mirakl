# # OR30Response200

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancelations** | [**\OpenAPI\Client\Mirakl\Model\OR30Response200Cancelations[]**](OR30Response200Cancelations.md) | List of representations of created cancellations | [optional]
**orderTaxMode** | **string** | Please note: In case there is no tax, the prices will show the same amount in TAX_EXCLUDED and TAX_INCLUDED mode. The tax mode is only useful if taxes are specified in the cancelation.&lt;br&gt;Possible values: &lt;ul&gt;&lt;li&gt;&lt;code&gt;TAX_EXCLUDED&lt;/code&gt;: the price fields (amount, shipping amount) are expressed without tax (taxes should be added to these prices in order to get the full amount including taxes).&lt;/li&gt;&lt;li&gt;&lt;code&gt;TAX_INCLUDED&lt;/code&gt;: the price fields include the tax amount. &lt;/li&gt;&lt;/ul&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
