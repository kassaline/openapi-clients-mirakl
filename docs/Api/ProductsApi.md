# OpenAPI\Client\Mirakl\ProductsApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProduct()**](ProductsApi.md#getProduct) | **GET** /products/{id_product} | Get product by ID |
| [**getProductByEan()**](ProductsApi.md#getProductByEan) | **GET** /products/ean/{ean} | Get a product by EAN |
| [**getProductList()**](ProductsApi.md#getProductList) | **GET** /products/search | Get a list of products by search term |


## `getProduct()`

```php
getProduct($idProduct, $storefront, $embedded): \OpenAPI\Client\Mirakl\Model\ApiResponseProductWithEmbedded
```

Get product by ID

Get a product by its <code>id_product</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idProduct = 342896472; // int | Kaufland internal id of the product
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductEmbeddable()); // \OpenAPI\Client\Mirakl\Model\ProductEmbeddable[] | Include related entities in the result (if both parameters \"category\" and \"category_basics\" are provided, only the parameter \"category\" is used)

try {
    $result = $apiInstance->getProduct($idProduct, $storefront, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduct** | **int**| Kaufland internal id of the product | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\ProductEmbeddable[]**](../Model/\OpenAPI\Client\Mirakl\Model\ProductEmbeddable.md)| Include related entities in the result (if both parameters \&quot;category\&quot; and \&quot;category_basics\&quot; are provided, only the parameter \&quot;category\&quot; is used) | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseProductWithEmbedded**](../Model/ApiResponseProductWithEmbedded.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductByEan()`

```php
getProductByEan($ean, $storefront, $embedded): \OpenAPI\Client\Mirakl\Model\ApiResponseProductWithEmbedded
```

Get a product by EAN

Get a product by EAN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = 4010884503135; // string | European Article Number with 13, 14 or 15 digits
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductEmbeddable()); // \OpenAPI\Client\Mirakl\Model\ProductEmbeddable[] | Include related entities in the result (if both parameters \"category\" and \"category_basics\" are provided, only the parameter \"category\" is used)

try {
    $result = $apiInstance->getProductByEan($ean, $storefront, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductByEan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| European Article Number with 13, 14 or 15 digits | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\ProductEmbeddable[]**](../Model/\OpenAPI\Client\Mirakl\Model\ProductEmbeddable.md)| Include related entities in the result (if both parameters \&quot;category\&quot; and \&quot;category_basics\&quot; are provided, only the parameter \&quot;category\&quot; is used) | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseProductWithEmbedded**](../Model/ApiResponseProductWithEmbedded.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductList()`

```php
getProductList($storefront, $q, $limit, $offset, $embedded): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseProductWithEmbedded
```

Get a list of products by search term

Get a list of products by search term

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$q = Book; // string | Search term for finding a specific product
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductEmbeddable()); // \OpenAPI\Client\Mirakl\Model\ProductEmbeddable[] | Include other entities in the results of the result list (if both parameters \"category\" and \"category_basics\" are provided, only the parameter \"category\" is used)

try {
    $result = $apiInstance->getProductList($storefront, $q, $limit, $offset, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **q** | **string**| Search term for finding a specific product | |
| **limit** | **int**| Desired size of result set. Max: 100 | [optional] |
| **offset** | **int**| Offset applied to result set | [optional] |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\ProductEmbeddable[]**](../Model/\OpenAPI\Client\Mirakl\Model\ProductEmbeddable.md)| Include other entities in the results of the result list (if both parameters \&quot;category\&quot; and \&quot;category_basics\&quot; are provided, only the parameter \&quot;category\&quot; is used) | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseProductWithEmbedded**](../Model/CollectionApiResponseProductWithEmbedded.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
