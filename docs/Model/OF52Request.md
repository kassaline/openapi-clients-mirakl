# # OF52Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channelCodes** | **string[]** | List of the channel codes to filter with. If specified, only offers that can be sold on the specified channel(s) will be returned. If not, offers will be returned regardless of their channels. | [optional]
**exportType** | **string** | Format of the generated files: CSV or JSON (value is either &lt;code&gt;text/csv&lt;/code&gt; or &lt;code&gt;application/json&lt;/code&gt;). Default to &lt;code&gt;text/csv&lt;/code&gt;. | [optional]
**includeFields** | **string[]** | Specify which columns (CSV) or fields (JSON) will be returned. If specified, only the listed columns/fields will be returned, otherwise all will be returned. If combined with &lt;em&gt;rename_fields&lt;/em&gt;, &lt;em&gt;include_fields&lt;/em&gt; must use the original header/field names. | [optional]
**includeInactiveOffers** | **bool** | When calling the API in full mode (i.e. when no &lt;i&gt;last_request_date&lt;/i&gt; is provided), inactive offers are not returned. To retrieve both active and inactive offers, set this field to true.&lt;br /&gt;When calling the API in differential mode (i.e. when the &lt;i&gt;last_request_date&lt;/i&gt; is provided), both active and inactive offers are returned. This field cannot be used in differential mode otherwise the call fails. | [optional] [default to false]
**itemsPerChunk** | **int** | The maximum number of items per chunk | [optional]
**lastRequestDate** | **\DateTime** | Date and time of your last request.&lt;br /&gt;If provided, retrieves all offers updated since this date and time, including deleted and inactive offers.&lt;br /&gt;If not provided, retrieves all active offers only, unless otherwise specified in the &lt;i&gt;include_inactive_offers&lt;/i&gt; field. | [optional]
**megabytesPerChunk** | **int** | The maximum size in megabytes of a chunk | [optional]
**renameFields** | **array<string,string>** | This is only supported for CSV export. Can be used to modify the name of the CSV headers. The expected format is a JSON object with the original fields as keys and the substitute as value. &lt;pre&gt;{\&quot;offer-id\&quot;: \&quot;offerId\&quot;, \&quot;shop-name\&quot;:\&quot;shopName\&quot;}&lt;/pre&gt; | [optional]
**shippingZones** | **string[]** | If the setting &lt;i&gt;Export shipping charges and delivery times&lt;/i&gt; has been enabled, list of the shipping zones codes to filter with. If specified, only shipping information linked to the given zones will be returned. Otherwise, all shipping information for all zones will be returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
