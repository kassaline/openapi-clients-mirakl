# # PC01Response200Modules

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**miraklCatalogIntegrator** | **bool** | Mirakl Catalog integrator activated. Allows operator to manage catalog structure into Mirakl. | [optional]
**miraklCatalogManager** | **bool** | Mirakl Catalog Manager activated. Allows operator to remove the complexity of integrating catalogs from multiple sources. | [optional]
**miraklPlatformServices** | **bool** | Mirakl Platform for Services activated. Specific module for services management: separated from the product management module. | [optional]
**offerManagement** | **bool** | Offer management available on the platform | [optional]
**offerManagementMode** | **string** | Offer management mode on the platform: SIMPLE: All shops can push offers. HYBRID: The operator decides whether a shop can push offers on the platform. | [optional]
**orderManagement** | **bool** | Order management available on the platform | [optional]
**orderManagementMode** | **string** | Order management mode on the platform: SIMPLE: All shops can process orders. HYBRID: The operator decides whether a shop can process orders on the platform. | [optional]
**promotions** | **bool** | Promotion module activated | [optional]
**quotes** | **bool** | Quote module activated | [optional]
**taxManager** | [**\OpenAPI\Client\Mirakl\Model\PC01Response200ModulesTaxManager**](PC01Response200ModulesTaxManager.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
