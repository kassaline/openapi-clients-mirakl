# OpenAPI\Client\Mirakl\CatalogApi

All URIs are relative to https://miraklconnect.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProducts()**](CatalogApi.md#deleteProducts) | **DELETE** /products | Delete products in bulk from your Mirakl Connect Catalog |
| [**listProducts()**](CatalogApi.md#listProducts) | **GET** /products | List products from your Mirakl Connect catalog |
| [**upsertProducts()**](CatalogApi.md#upsertProducts) | **POST** /products | Create or Update your Mirakl Connect Catalog |


## `deleteProducts()`

```php
deleteProducts($deleteProductsRequest)
```

Delete products in bulk from your Mirakl Connect Catalog

Use this API to delete one or more products using the product identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'deleteProductsRequest' => new \OpenAPI\Client\Mirakl\Model\DeleteProductsRequest(), // \OpenAPI\Client\Mirakl\Model\DeleteProductsRequest
];

try {
    $apiInstance->deleteProducts($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->deleteProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteProductsRequest** | [**\OpenAPI\Client\Mirakl\Model\DeleteProductsRequest**](../Model/DeleteProductsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProducts()`

```php
listProducts($pageToken, $limit, $sort): \OpenAPI\Client\Mirakl\Model\ListProductsResponse
```

List products from your Mirakl Connect catalog

Use this API to retrieve products imported in your Mirakl Connect catalog. Items are sorted by product identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'pageToken' => 'pageToken_example', // string | Token to access the next or previous page
    'limit' => 1000, // int | Maximum number of listed products
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->listProducts($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageToken** | **string**| Token to access the next or previous page | [optional] |
| **limit** | **int**| Maximum number of listed products | [optional] [default to 1000] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ListProductsResponse**](../Model/ListProductsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertProducts()`

```php
upsertProducts($upsertProductsRequest)
```

Create or Update your Mirakl Connect Catalog

Products are created if they do not already exist. The missing fields in the request remain unchanged on the Mirakl Connect catalog (behaves like a PATCH).  Omitted top-elements in the API will remain unchanged.  Any nullable field can be explicitly set to null in order to remove its value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'upsertProductsRequest' => new \OpenAPI\Client\Mirakl\Model\UpsertProductsRequest(), // \OpenAPI\Client\Mirakl\Model\UpsertProductsRequest
];

try {
    $apiInstance->upsertProducts($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->upsertProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsertProductsRequest** | [**\OpenAPI\Client\Mirakl\Model\UpsertProductsRequest**](../Model/UpsertProductsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
