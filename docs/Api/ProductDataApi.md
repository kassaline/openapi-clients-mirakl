# OpenAPI\Client\Mirakl\ProductDataApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProductData()**](ProductDataApi.md#createProductData) | **PUT** /product-data | Add new product data for an EAN or replace your existing one |
| [**createProductDataFile()**](ProductDataApi.md#createProductDataFile) | **POST** /product-data/import-files | Add an import file URL |
| [**deleteProductData()**](ProductDataApi.md#deleteProductData) | **DELETE** /product-data/{ean} | Delete your product data for an EAN |
| [**getProductData()**](ProductDataApi.md#getProductData) | **GET** /product-data/{ean} | Get your product data for an EAN |
| [**getProductDataFile()**](ProductDataApi.md#getProductDataFile) | **GET** /product-data/import-files/{id_import_file} | Get import file by ID |
| [**getProductDataFileList()**](ProductDataApi.md#getProductDataFileList) | **GET** /product-data/import-files | Get import files |
| [**getProductDataStatus()**](ProductDataApi.md#getProductDataStatus) | **GET** /product-data/status/{ean} | Get the process status for your product data |
| [**updateProductData()**](ProductDataApi.md#updateProductData) | **PATCH** /product-data | Update existing product data for an EAN |


## `createProductData()`

```php
createProductData($locale, $productDataObject): \OpenAPI\Client\Mirakl\Model\ApiResponse
```

Add new product data for an EAN or replace your existing one

Add new product data for an EAN or replace your existing one. The API expects to receive each attribute key only once. If you send the same attribute key multiple times, only the last value will be used. For attributes that can have multiple values (for example: picture), you can send an array of values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Locale(); // \OpenAPI\Client\Mirakl\Model\Locale | The language code of the product data (ISO 3166-2)
$productDataObject = {"ean":["4009750243800"],"attributes":{"title":["Chocolat"],"description":["In einem verschlafenen Städtchen in Frankreich im Jahr 1959. ...Doch am Ende zählt nur eins: Die pure Lust am Leben!"],"picture":["https://media.cdn.kaufland.de/product-images/1024x1024/883b961019d9ec22e56719f5a9f3ad22.jpg"],"product_safety_contact":{"name":"Musterbetrieb","email_address":"someone@example.net","address":"Musterstraße 1, Musterstadt, 12345, DE","phone_number":"+491234567890","url":"https://example.net/contact-page"}}}; // \OpenAPI\Client\Mirakl\Model\ProductDataObject | JSON contains ean and attributes. Attributes contain all attributes with values

try {
    $result = $apiInstance->createProductData($locale, $productDataObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->createProductData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) | |
| **productDataObject** | [**\OpenAPI\Client\Mirakl\Model\ProductDataObject**](../Model/ProductDataObject.md)| JSON contains ean and attributes. Attributes contain all attributes with values | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductDataFile()`

```php
createProductDataFile($importFileRequestBody): \OpenAPI\Client\Mirakl\Model\ApiResponseProductDataImportFileResponse
```

Add an import file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported. For the upload of product feed data there is a limit of 30 feeds per day, so please combine data for multiple products in one CSV file if possible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$importFileRequestBody = {"url":"http://www.example.com/my_products.csv"}; // \OpenAPI\Client\Mirakl\Model\ImportFileRequestBody | Json object with import file data

try {
    $result = $apiInstance->createProductDataFile($importFileRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->createProductDataFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importFileRequestBody** | [**\OpenAPI\Client\Mirakl\Model\ImportFileRequestBody**](../Model/ImportFileRequestBody.md)| Json object with import file data | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseProductDataImportFileResponse**](../Model/ApiResponseProductDataImportFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductData()`

```php
deleteProductData($ean, $locale): \OpenAPI\Client\Mirakl\Model\ApiResponse
```

Delete your product data for an EAN

Delete the product data that you provided for a specific product via its EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = 4009750243800; // string | European Article Number with 13, 14 or 15 digits
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Locale(); // \OpenAPI\Client\Mirakl\Model\Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->deleteProductData($ean, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->deleteProductData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| European Article Number with 13, 14 or 15 digits | |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductData()`

```php
getProductData($ean, $locale): \OpenAPI\Client\Mirakl\Model\ApiResponseProductDataObject
```

Get your product data for an EAN

Get the product data that you provided for a specific product via its EAN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = 4009750243800; // string | European Article Number with 13, 14 or 15 digits
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Locale(); // \OpenAPI\Client\Mirakl\Model\Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->getProductData($ean, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| European Article Number with 13, 14 or 15 digits | |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseProductDataObject**](../Model/ApiResponseProductDataObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDataFile()`

```php
getProductDataFile($idImportFile): \OpenAPI\Client\Mirakl\Model\ApiResponseProductDataImportFileResponse
```

Get import file by ID

Get an import file by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idImportFile = 56; // int

try {
    $result = $apiInstance->getProductDataFile($idImportFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductDataFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idImportFile** | **int**|  | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseProductDataImportFileResponse**](../Model/ApiResponseProductDataImportFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDataFileList()`

```php
getProductDataFileList($status, $tsCreated, $tsUpdated, $sort, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseProductDataImportFileResponse
```

Get import files

Get a list of all your import files. You can narrow down the search using various parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataImportFileStatus(); // \OpenAPI\Client\Mirakl\Model\ProductDataImportFileStatus | The status of your import
$tsCreated = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Creation timestamp of the import file in ISO 8601
$tsUpdated = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Update timestamp of the import file in ISO 8601
$sort = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataImportFileSorting(); // \OpenAPI\Client\Mirakl\Model\ProductDataImportFileSorting | Select the field (time created or time updated) and the direction of sorting (ascending or descending)
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set

try {
    $result = $apiInstance->getProductDataFileList($status, $tsCreated, $tsUpdated, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductDataFileList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\OpenAPI\Client\Mirakl\Model\ProductDataImportFileStatus**](../Model/.md)| The status of your import | [optional] |
| **tsCreated** | **\DateTime**| Creation timestamp of the import file in ISO 8601 | [optional] |
| **tsUpdated** | **\DateTime**| Update timestamp of the import file in ISO 8601 | [optional] |
| **sort** | [**\OpenAPI\Client\Mirakl\Model\ProductDataImportFileSorting**](../Model/.md)| Select the field (time created or time updated) and the direction of sorting (ascending or descending) | [optional] |
| **limit** | **int**| Desired size of result set. Max: 100 | [optional] |
| **offset** | **int**| Offset applied to result set | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseProductDataImportFileResponse**](../Model/CollectionApiResponseProductDataImportFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDataStatus()`

```php
getProductDataStatus($ean, $locale): \OpenAPI\Client\Mirakl\Model\ApiResponseProductDataStatusResponse
```

Get the process status for your product data

Get the process status for your provided product data via EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = 4009750243800; // string | European Article Number with 13, 14 or 15 digits
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Locale(); // \OpenAPI\Client\Mirakl\Model\Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->getProductDataStatus($ean, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductDataStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| European Article Number with 13, 14 or 15 digits | |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseProductDataStatusResponse**](../Model/ApiResponseProductDataStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductData()`

```php
updateProductData($locale, $productDataObject): \OpenAPI\Client\Mirakl\Model\ApiResponse
```

Update existing product data for an EAN

Add product data for a specific product (this will overwrite already provided values). The API expects to receive each attribute key only once. If you send the same attribute key multiple times, only the last value will be used. For attributes that can have multiple values (for example: picture), you can send an array of values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Locale(); // \OpenAPI\Client\Mirakl\Model\Locale | The language code of the product data (ISO 3166-2)
$productDataObject = {"ean":["4009750243800"],"attributes":{"description":["Another description..."]}}; // \OpenAPI\Client\Mirakl\Model\ProductDataObject | JSON contains ean and attributes. Attributes contain all attributes with values JSON can contain ean and attributes. Attributes contain all attributes with values

try {
    $result = $apiInstance->updateProductData($locale, $productDataObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->updateProductData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) | |
| **productDataObject** | [**\OpenAPI\Client\Mirakl\Model\ProductDataObject**](../Model/ProductDataObject.md)| JSON contains ean and attributes. Attributes contain all attributes with values JSON can contain ean and attributes. Attributes contain all attributes with values | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
