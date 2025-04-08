# OpenAPI\Client\Mirakl\StoresApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**a01()**](StoresApi.md#a01) | **GET** /api/account | Get shop information |
| [**a02()**](StoresApi.md#a02) | **PUT** /api/account | Update shop information |
| [**s30()**](StoresApi.md#s30) | **GET** /api/shops/documents | List shop&#39;s documents |
| [**s31()**](StoresApi.md#s31) | **GET** /api/shops/documents/download | Download documents for one or multiple shops |
| [**s33()**](StoresApi.md#s33) | **DELETE** /api/shops/documents/{document_id} | Delete a shop document |


## `a01()`

```php
a01($shopId): \OpenAPI\Client\Mirakl\Model\A01Response200
```

Get shop information



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->a01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->a01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\A01Response200**](../Model/A01Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `a02()`

```php
a02($shopId, $a02Request): \OpenAPI\Client\Mirakl\Model\A02Response200
```

Update shop information



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'a02Request' => new \OpenAPI\Client\Mirakl\Model\A02Request(), // \OpenAPI\Client\Mirakl\Model\A02Request
];

try {
    $result = $apiInstance->a02($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->a02: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **a02Request** | [**\OpenAPI\Client\Mirakl\Model\A02Request**](../Model/A02Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\A02Response200**](../Model/A02Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s30()`

```php
s30($shopId): \OpenAPI\Client\Mirakl\Model\S30Response200
```

List shop's documents

You must specify at least one of the following parameters: <code>shop_ids</code>, <code>updated_since</code>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->s30($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->s30: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\S30Response200**](../Model/S30Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s31()`

```php
s31($documentIds, $typeCodes, $shopId): \SplFileObject
```

Download documents for one or multiple shops

<ul>  <li><span class='red'>It is mandatory to specify either the <code>shop_ids</code> or the <code>document_ids</code>.</span></li>  <li>If a list of document identifiers is specified only these documents are downloaded.    <ul>      <li>If more than one document id is specified, the documents will be wrapped in a ZIP archive</li>      <li>If only one document id is specified the document will not be zipped</li>    </ul>  </li>  <li>    If no document identifiers is specified, all the shop documents will be downloaded.<br/>    Use a list of shop document type codes to retrieve specific types from your shop.<br/>    In this case, the output of the API will always be a ZIP archive even if there is only one document to retrieve.  </li></ul><p>When documents are retrieved, they're wrapped into a ZIP archive except when only one document id is specified. The tree structure of this archive is as follow:</p><pre> documents-timestamp.zip |__ shop_id/ |   |__ image.png |   |__ image(1).png |   |__ foo.txt </pre><p>Returns a <code>404</code> if at least one document id or one document type code is invalid</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'documentIds' => 'documentIds_example', // string | A list of document identifiers (separated by a comma). It is mandatory to specify either the <code>shop_ids</code> or the <code>document_ids</code>
    'typeCodes' => 'typeCodes_example', // string | A list of document type codes (separated by a comma)
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->s31($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->s31: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentIds** | **string**| A list of document identifiers (separated by a comma). It is mandatory to specify either the &lt;code&gt;shop_ids&lt;/code&gt; or the &lt;code&gt;document_ids&lt;/code&gt; | [optional] |
| **typeCodes** | **string**| A list of document type codes (separated by a comma) | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s33()`

```php
s33($documentId, $shopId)
```

Delete a shop document



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'documentId' => 56, // int | Document identifier to delete
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $apiInstance->s33($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->s33: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **int**| Document identifier to delete | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
