# OpenAPI\Client\Mirakl\PlatformSettingsApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aF01()**](PlatformSettingsApi.md#aF01) | **GET** /api/additional_fields | List all custom fields |
| [**cH11()**](PlatformSettingsApi.md#cH11) | **GET** /api/channels | List all enabled channels |
| [**cUR01()**](PlatformSettingsApi.md#cUR01) | **GET** /api/currencies | List currency codes and labels |
| [**dO01()**](PlatformSettingsApi.md#dO01) | **GET** /api/documents | List all document types |
| [**l01()**](PlatformSettingsApi.md#l01) | **GET** /api/locales | List locale codes and labels |
| [**oF61()**](PlatformSettingsApi.md#oF61) | **GET** /api/offers/states | List offer conditions |
| [**pC01()**](PlatformSettingsApi.md#pC01) | **GET** /api/platform/configuration | List platform configurations |
| [**rE01()**](PlatformSettingsApi.md#rE01) | **GET** /api/reasons | List reasons |
| [**sH11()**](PlatformSettingsApi.md#sH11) | **GET** /api/shipping/zones | List all active shipping zones |
| [**sH12()**](PlatformSettingsApi.md#sH12) | **GET** /api/shipping/types | List all active shipping methods |
| [**sH21()**](PlatformSettingsApi.md#sH21) | **GET** /api/shipping/carriers | List all carriers |
| [**sH31()**](PlatformSettingsApi.md#sH31) | **GET** /api/shipping/logistic_classes | List all logistic classes |
| [**v01()**](PlatformSettingsApi.md#v01) | **GET** /api/version | Health Check endpoint |


## `aF01()`

```php
aF01($entities, $shopId, $locale): \OpenAPI\Client\Mirakl\Model\AF01Response200
```

List all custom fields



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'entities' => 'entities_example', // string | A comma separated list of entities on which the additional fields must apply. Accepted values are <code>OFFER</code>, <code>SHOP</code>, <code>ORDER</code> and <code>ORDER_LINE</code>. Ex: <code>OFFER,SHOP</code>.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->aF01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->aF01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entities** | **string**| A comma separated list of entities on which the additional fields must apply. Accepted values are &lt;code&gt;OFFER&lt;/code&gt;, &lt;code&gt;SHOP&lt;/code&gt;, &lt;code&gt;ORDER&lt;/code&gt; and &lt;code&gt;ORDER_LINE&lt;/code&gt;. Ex: &lt;code&gt;OFFER,SHOP&lt;/code&gt;. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\AF01Response200**](../Model/AF01Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cH11()`

```php
cH11($shopId, $locale): \OpenAPI\Client\Mirakl\Model\CH11Response200
```

List all enabled channels

Results are sorted by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->cH11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->cH11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CH11Response200**](../Model/CH11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cUR01()`

```php
cUR01($shopId, $locale): \OpenAPI\Client\Mirakl\Model\CUR01Response200
```

List currency codes and labels

List currency codes and labels activated on the platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->cUR01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->cUR01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CUR01Response200**](../Model/CUR01Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dO01()`

```php
dO01($entities, $shopId, $locale): \OpenAPI\Client\Mirakl\Model\DO01Response200
```

List all document types



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'entities' => 'entities_example', // string | A comma separated list of values, representing the type of entities the document type should be related to. Accepted values are <code>ORDER</code>, <code>SHOP</code>. Ex: <code>ORDER,SHOP</code>
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->dO01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->dO01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entities** | **string**| A comma separated list of values, representing the type of entities the document type should be related to. Accepted values are &lt;code&gt;ORDER&lt;/code&gt;, &lt;code&gt;SHOP&lt;/code&gt;. Ex: &lt;code&gt;ORDER,SHOP&lt;/code&gt; | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\DO01Response200**](../Model/DO01Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `l01()`

```php
l01($shopId): \OpenAPI\Client\Mirakl\Model\L01Response200
```

List locale codes and labels

List locale codes and labels from your platform to automate product format exports (API H01, PM01, VL01) from your PIM system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->l01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->l01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\L01Response200**](../Model/L01Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oF61()`

```php
oF61($active, $shopId, $locale): \OpenAPI\Client\Mirakl\Model\OF61Response200
```

List offer conditions

Sorted by sort index, set in the back-office

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'active' => True, // bool | Filter offer condition on their active status. If true, only active offer conditions are returned. If false, only inactive offer conditions are returned. If not specified, all offer conditions are returned.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->oF61($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->oF61: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active** | **bool**| Filter offer condition on their active status. If true, only active offer conditions are returned. If false, only inactive offer conditions are returned. If not specified, all offer conditions are returned. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OF61Response200**](../Model/OF61Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pC01()`

```php
pC01($shopId): \OpenAPI\Client\Mirakl\Model\PC01Response200
```

List platform configurations

List platform configurations such as general information, modules and features activated.<br/> <br/> Note: This configuration represents modules and major features enabled during platform setup. This differs from the PC02 API which export the platform business settings configurable by the operator in the back office.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->pC01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->pC01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\PC01Response200**](../Model/PC01Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rE01()`

```php
rE01($shopId, $locale): \OpenAPI\Client\Mirakl\Model\RE01Response200
```

List reasons

This API returns cancellation, refund, incident, and message reasons.<br>Reasons are sorted by type then sort index (set in the back-office)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->rE01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->rE01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\RE01Response200**](../Model/RE01Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sH11()`

```php
sH11($shopId, $locale): \OpenAPI\Client\Mirakl\Model\SH11Response200
```

List all active shipping zones

Results are sorted by index, set in the back-office

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->sH11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->sH11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\SH11Response200**](../Model/SH11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sH12()`

```php
sH12($shopId, $locale): \OpenAPI\Client\Mirakl\Model\SH12Response200
```

List all active shipping methods

Results are sorted by index, set in the back-office

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->sH12($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->sH12: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\SH12Response200**](../Model/SH12Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sH21()`

```php
sH21($shopId): \OpenAPI\Client\Mirakl\Model\SH21Response200
```

List all carriers

Results are sorted alphabetically by carrier label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->sH21($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->sH21: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\SH21Response200**](../Model/SH21Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sH31()`

```php
sH31($shopId, $locale): \OpenAPI\Client\Mirakl\Model\SH31Response200
```

List all logistic classes

Results are sorted by index, set in the back-office

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->sH31($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->sH31: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\SH31Response200**](../Model/SH31Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v01()`

```php
v01($shopId)
```

Health Check endpoint

Use this endpoint to check that Mirakl Platform is up.<br/>You can ignore the response body that is subject to change, checking the response code is enough.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PlatformSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $apiInstance->v01($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling PlatformSettingsApi->v01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
