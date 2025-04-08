# OpenAPI\Client\Mirakl\ProductsApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**h11()**](ProductsApi.md#h11) | **GET** /api/hierarchies | List Catalog categories (parents and children) related to a Catalog category |
| [**p31()**](ProductsApi.md#p31) | **GET** /api/products | Get products for a list of product references |
| [**p42()**](ProductsApi.md#p42) | **GET** /api/products/imports/{import} | Get the import status for a product import |
| [**p44()**](ProductsApi.md#p44) | **GET** /api/products/imports/{import}/error_report | Get the error report file for a product import (\&quot;Non-integrated products report\&quot;) |
| [**p45()**](ProductsApi.md#p45) | **GET** /api/products/imports/{import}/new_product_report | Get the product integration report file for a product import (\&quot;Added products report\&quot;) |
| [**p46()**](ProductsApi.md#p46) | **GET** /api/products/imports/{import}/transformed_file | Get the transformed file for a product import (\&quot;File in operator format\&quot;) |
| [**p47()**](ProductsApi.md#p47) | **GET** /api/products/imports/{import}/transformation_error_report | Get the transformation error report file for a product import (\&quot;Source file error report\&quot;) |
| [**p51()**](ProductsApi.md#p51) | **GET** /api/products/imports | Get information about product import statuses |
| [**pM11()**](ProductsApi.md#pM11) | **GET** /api/products/attributes | Get the product attribute configuration |
| [**vL11()**](ProductsApi.md#vL11) | **GET** /api/values_lists | Get information about operator&#39;s value lists |


## `h11()`

```php
h11($hierarchy, $maxLevel, $shopId): \OpenAPI\Client\Mirakl\Model\H11Response200
```

List Catalog categories (parents and children) related to a Catalog category



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'hierarchy' => 'hierarchy_example', // string | Catalog category code
    'maxLevel' => 56, // int | Number of children catalog category levels to retrieve. If not specified, all child catalog categories are retrieved
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->h11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->h11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hierarchy** | **string**| Catalog category code | [optional] |
| **maxLevel** | **int**| Number of children catalog category levels to retrieve. If not specified, all child catalog categories are retrieved | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\H11Response200**](../Model/H11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p31()`

```php
p31($productReferences, $shopId, $locale): \OpenAPI\Client\Mirakl\Model\P31Response200
```

Get products for a list of product references

Note: this resource returns 100 products maximum <br/> Results are sorted by product sku asc, then by product identifier type asc and then by product identifier asc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'productReferences' => 'productReferences_example', // string | List of the product's identifiers with type, <em>(structure: \"<code>product_references=&lt;productIdType&gt;|&lt;productId&gt;,&lt;productIdType&gt;|&lt;productId&gt;, ...</code>\")</em> where accepted <code>&lt;productIdType&gt;</code> are operator’s product references, like <code>EAN</code> or <code>UPC</code> for example. Note that <code>SHOP_SKU</code> or <code>SKU</code> are invalid <code>&lt;productIdType&gt;</code> for this API.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->p31($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->p31: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productReferences** | **string**| List of the product&#39;s identifiers with type, &lt;em&gt;(structure: \&quot;&lt;code&gt;product_references&#x3D;&amp;lt;productIdType&amp;gt;|&amp;lt;productId&amp;gt;,&amp;lt;productIdType&amp;gt;|&amp;lt;productId&amp;gt;, ...&lt;/code&gt;\&quot;)&lt;/em&gt; where accepted &lt;code&gt;&amp;lt;productIdType&amp;gt;&lt;/code&gt; are operator’s product references, like &lt;code&gt;EAN&lt;/code&gt; or &lt;code&gt;UPC&lt;/code&gt; for example. Note that &lt;code&gt;SHOP_SKU&lt;/code&gt; or &lt;code&gt;SKU&lt;/code&gt; are invalid &lt;code&gt;&amp;lt;productIdType&amp;gt;&lt;/code&gt; for this API. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\P31Response200**](../Model/P31Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p42()`

```php
p42($import, $shopId): \OpenAPI\Client\Mirakl\Model\P42Response200
```

Get the import status for a product import



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'import' => 56, // int | Import identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->p42($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->p42: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import** | **int**| Import identifier | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\P42Response200**](../Model/P42Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p44()`

```php
p44($import, $shopId): \SplFileObject
```

Get the error report file for a product import (\"Non-integrated products report\")

This API returns either a CSV file (MCM enabled) or a file in a format defined by the operator (MCM disabled).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'import' => 56, // int | Import identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->p44($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->p44: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import** | **int**| Import identifier | |
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

## `p45()`

```php
p45($import, $shopId): \SplFileObject
```

Get the product integration report file for a product import (\"Added products report\")

This API returns either a CSV file (MCM enabled) or a file in a format defined by the operator (MCM disabled).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'import' => 56, // int | Import identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->p45($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->p45: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import** | **int**| Import identifier | |
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

## `p46()`

```php
p46($import, $shopId): \SplFileObject
```

Get the transformed file for a product import (\"File in operator format\")

This API returns a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'import' => 56, // int | Import identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->p46($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->p46: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import** | **int**| Import identifier | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p47()`

```php
p47($import, $shopId): \SplFileObject
```

Get the transformation error report file for a product import (\"Source file error report\")

This API returns a CSV, XLSX or XML file, depending on the file format provided by the seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'import' => 56, // int | Import identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->p47($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->p47: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import** | **int**| Import identifier | |
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

## `p51()`

```php
p51($lastRequestDate, $status, $hasTransformedFile, $shopId, $max, $offset, $sort, $order): \OpenAPI\Client\Mirakl\Model\P51Response200
```

Get information about product import statuses

If the last_request_date param is not set the api returns all product imports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'lastRequestDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Return only product imports that have changed since this date
    'status' => 'status_example', // string | Product import status. One of <code>CANCELLED</code>, <code>WAITING</code>, <code>RUNNING</code>, <code>SENT</code>, <code>COMPLETE</code>, <code>FAILED</code>
    'hasTransformedFile' => True, // bool | If <code>true</code> returns only product import trackings with transformed file
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'max' => 56, // int | Maximum number of items returned per page
    'offset' => 56, // int | Index of the first item (among all the results) in the returned page
    'sort' => 'sort_example', // string | How the results should be sorted
    'order' => 'order_example', // string | Sort direction
];

try {
    $result = $apiInstance->p51($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->p51: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lastRequestDate** | **\DateTime**| Return only product imports that have changed since this date | [optional] |
| **status** | **string**| Product import status. One of &lt;code&gt;CANCELLED&lt;/code&gt;, &lt;code&gt;WAITING&lt;/code&gt;, &lt;code&gt;RUNNING&lt;/code&gt;, &lt;code&gt;SENT&lt;/code&gt;, &lt;code&gt;COMPLETE&lt;/code&gt;, &lt;code&gt;FAILED&lt;/code&gt; | [optional] |
| **hasTransformedFile** | **bool**| If &lt;code&gt;true&lt;/code&gt; returns only product import trackings with transformed file | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **max** | **int**| Maximum number of items returned per page | [optional] |
| **offset** | **int**| Index of the first item (among all the results) in the returned page | [optional] |
| **sort** | **string**| How the results should be sorted | [optional] |
| **order** | **string**| Sort direction | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\P51Response200**](../Model/P51Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pM11()`

```php
pM11($hierarchy, $maxLevel, $allOperatorAttributes, $withRoles, $shopId): \OpenAPI\Client\Mirakl\Model\PM11Response200
```

Get the product attribute configuration

Retrieves all attributes for parents and children of the requested hierarchy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'hierarchy' => 'hierarchy_example', // string | Code of the hierarchy (category) for which to retrieve the attributes. If not specified, all attributes are retrieved.
    'maxLevel' => 56, // int | Number of children hierarchy (category) levels to retrieve. If not specified, attributes from all children hierarchies are retrieved.
    'allOperatorAttributes' => false, // bool | Set to \"<code>true</code>\" to get all the operator attributes.
    'withRoles' => false, // bool | Set to \"<code>true</code>\" to get only the attributes that have roles.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->pM11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->pM11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hierarchy** | **string**| Code of the hierarchy (category) for which to retrieve the attributes. If not specified, all attributes are retrieved. | [optional] |
| **maxLevel** | **int**| Number of children hierarchy (category) levels to retrieve. If not specified, attributes from all children hierarchies are retrieved. | [optional] |
| **allOperatorAttributes** | **bool**| Set to \&quot;&lt;code&gt;true&lt;/code&gt;\&quot; to get all the operator attributes. | [optional] [default to false] |
| **withRoles** | **bool**| Set to \&quot;&lt;code&gt;true&lt;/code&gt;\&quot; to get only the attributes that have roles. | [optional] [default to false] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\PM11Response200**](../Model/PM11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vL11()`

```php
vL11($code, $shopId): \OpenAPI\Client\Mirakl\Model\VL11Response200
```

Get information about operator's value lists



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'code' => 'code_example', // string | The operator's values list code. If not specified, all values lists are retrieved
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->vL11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->vL11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The operator&#39;s values list code. If not specified, all values lists are retrieved | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\VL11Response200**](../Model/VL11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
