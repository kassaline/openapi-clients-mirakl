# # P51Response200ProductImportTrackings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversionOptions** | [**\OpenAPI\Client\Mirakl\Model\P51Response200ProductImportTrackingsConversionOptions**](P51Response200ProductImportTrackingsConversionOptions.md) |  | [optional]
**conversionType** | **string** | Type of conversion applied on products | [optional]
**dateCreated** | **\DateTime** | Import creation date | [optional]
**hasErrorReport** | **bool** | Returns true if error report is available. Value is filled when the import is completed | [optional]
**hasNewProductReport** | **bool** | Returns true if new product report is available. Value is filled when the import is completed | [optional]
**hasTransformationErrorReport** | **bool** | Returns true if transformation error report is available. Value is filled when the import is completed | [optional]
**hasTransformedFile** | **bool** | Returns true if transformed file is available. Value is filled when the import is completed | [optional]
**importId** | **int** | Import identifier | [optional]
**importStatus** | **string** | Import status | [optional]
**integrationDetails** | [**\OpenAPI\Client\Mirakl\Model\P51Response200ProductImportTrackingsIntegrationDetails**](P51Response200ProductImportTrackingsIntegrationDetails.md) |  | [optional]
**reasonStatus** | **string** | A message explaining the reason of the import status, if relevant | [optional]
**shopId** | **int** | Shop identifier | [optional]
**transformLinesInError** | **int** | Total count of transformed lines in error | [optional]
**transformLinesInSuccess** | **int** | Total count of transformed lines in success | [optional]
**transformLinesRead** | **int** | Total count of transformed lines read | [optional]
**transformLinesWithWarning** | **int** | Total count of transformed lines with warning | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
