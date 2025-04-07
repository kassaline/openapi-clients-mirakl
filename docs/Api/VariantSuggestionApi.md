# OpenAPI\Client\Mirakl\VariantSuggestionApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVariantSuggestionsFeed()**](VariantSuggestionApi.md#getVariantSuggestionsFeed) | **GET** /variant-suggestions/feed/{id_import_file} | Get import file by ID |
| [**getVariantSuggestionsFeedList()**](VariantSuggestionApi.md#getVariantSuggestionsFeedList) | **GET** /variant-suggestions/feed | Get import files |
| [**uploadVariantSuggestionFileByUrl()**](VariantSuggestionApi.md#uploadVariantSuggestionFileByUrl) | **POST** /variant-suggestions/feed/upload-by-url | Add an import file URL |


## `getVariantSuggestionsFeed()`

```php
getVariantSuggestionsFeed($idImportFile): \OpenAPI\Client\Mirakl\Model\ApiResponseProductCategoriesImportFileResponse
```

Get import file by ID

Get an import file by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\VariantSuggestionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idImportFile = 56; // int

try {
    $result = $apiInstance->getVariantSuggestionsFeed($idImportFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantSuggestionApi->getVariantSuggestionsFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idImportFile** | **int**|  | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseProductCategoriesImportFileResponse**](../Model/ApiResponseProductCategoriesImportFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVariantSuggestionsFeedList()`

```php
getVariantSuggestionsFeedList($status, $tsCreated, $tsUpdated, $sort, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseProductCategoriesImportFileResponse
```

Get import files

Get a list of all your import files. You can narrow down the search using various parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\VariantSuggestionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductCategoriesImportFileStatus(); // \OpenAPI\Client\Mirakl\Model\ProductCategoriesImportFileStatus | The status of your import
$tsCreated = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Creation timestamp of the import file in ISO 8601
$tsUpdated = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Update timestamp of the import file in ISO 8601
$sort = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductCategoriesImportFileSorting(); // \OpenAPI\Client\Mirakl\Model\ProductCategoriesImportFileSorting | Select the field (time created or time updated) and the direction of sorting (ascending or descending)
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set

try {
    $result = $apiInstance->getVariantSuggestionsFeedList($status, $tsCreated, $tsUpdated, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantSuggestionApi->getVariantSuggestionsFeedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\OpenAPI\Client\Mirakl\Model\ProductCategoriesImportFileStatus**](../Model/.md)| The status of your import | [optional] |
| **tsCreated** | **\DateTime**| Creation timestamp of the import file in ISO 8601 | [optional] |
| **tsUpdated** | **\DateTime**| Update timestamp of the import file in ISO 8601 | [optional] |
| **sort** | [**\OpenAPI\Client\Mirakl\Model\ProductCategoriesImportFileSorting**](../Model/.md)| Select the field (time created or time updated) and the direction of sorting (ascending or descending) | [optional] |
| **limit** | **int**| Desired size of result set. Max: 100 | [optional] |
| **offset** | **int**| Offset applied to result set | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseProductCategoriesImportFileResponse**](../Model/CollectionApiResponseProductCategoriesImportFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadVariantSuggestionFileByUrl()`

```php
uploadVariantSuggestionFileByUrl($productCategoriesImportFileRequestBody): \OpenAPI\Client\Mirakl\Model\ApiResponseProductCategoriesImportFileResponse
```

Add an import file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported. For the upload of product feed data there is a limit of 30 feeds per day, so please combine data for multiple products in one CSV file if possible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\VariantSuggestionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productCategoriesImportFileRequestBody = {"url":"http://www.example.com/my_products.csv"}; // \OpenAPI\Client\Mirakl\Model\ProductCategoriesImportFileRequestBody | Json object with import file data

try {
    $result = $apiInstance->uploadVariantSuggestionFileByUrl($productCategoriesImportFileRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantSuggestionApi->uploadVariantSuggestionFileByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productCategoriesImportFileRequestBody** | [**\OpenAPI\Client\Mirakl\Model\ProductCategoriesImportFileRequestBody**](../Model/ProductCategoriesImportFileRequestBody.md)| Json object with import file data | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseProductCategoriesImportFileResponse**](../Model/ApiResponseProductCategoriesImportFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
