# # OR11Response200OrdersCustomerOrganization

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\OpenAPI\Client\Mirakl\Model\OR11Response200OrdersCustomerOrganizationAddress**](OR11Response200OrdersCustomerOrganizationAddress.md) |  | [optional]
**identificationNumber** | **string** | Number used to identify the customer organization as an established business in a country. E.g: SIRET number in France, NIF in Spain. Required for new organizations.&lt;br/&gt;Null before shipping (or acceptance, depending on platform setting). | [optional]
**name** | **string** | Name of the organization. Required for new organizations. | [optional]
**organizationId** | **string** | Customer&#39;s organization id (from the operator&#39;s system).&lt;br/&gt;Null before shipping (or acceptance, depending on platform setting). | [optional]
**taxIdentificationNumber** | **string** | Tax identification number of the organization.&lt;br/&gt;Null before shipping (or acceptance, depending on platform setting). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
