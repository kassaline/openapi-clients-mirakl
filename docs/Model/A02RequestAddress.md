# # A02RequestAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**city** | **string** | City of the shop contact. Cannot be null. | [optional]
**civility** | **string** | Civility of the shop contact. Cannot be null. | [optional]
**country** | **string** | Country ISO 3166-1 code of the shop contact, used by Mirakl to format the address (back office, delivery bill, invoices...) and to adapt the address validation to the country (see &lt;code&gt;zip_code&lt;/code&gt; field). Cannot be null. | [optional]
**firstname** | **string** | First name of the shop contact. Cannot be null. | [optional]
**lastname** | **string** | Last name of the shop contact. Cannot be null. | [optional]
**phone** | **string** | Phone of the shop contact. Nullable. | [optional]
**phoneSecondary** | **string** | Secondary phone of the shop contact. Nullable. | [optional]
**state** | **string** | State (address) of the shop contact. Nullable. | [optional]
**street1** | **string** | First line of the address of the shop contact. Cannot be null. | [optional]
**street2** | **string** | Second line of the address of the shop contact. Nullable. | [optional]
**zipCode** | **string** | Zip code of the shop contact. Only nullable if the country_iso_code is Chile, Peru, Hong-Kong, Qatar, Bahrain, Saudi Arabia, Oman, Kuwait, Egypt or United Arab Emirates. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
