# OpenAPI\Client\Mirakl\InfoApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllLocales()**](InfoApi.md#getAllLocales) | **GET** /info/locale | Get values for parameter &#39;locale&#39; |
| [**getAllStorefronts()**](InfoApi.md#getAllStorefronts) | **GET** /info/storefront | Get values for parameter &#39;storefront&#39; |
| [**getVatIndicators()**](InfoApi.md#getVatIndicators) | **GET** /info/vat-indicators | Get a list of Vat Indicators Mappings per Storefront |


## `getAllLocales()`

```php
getAllLocales(): \OpenAPI\Client\Mirakl\Model\ApiResponseInfoLocaleObject
```

Get values for parameter 'locale'

Get all available values for the parameter 'locale'. This parameter specifies the language of e.g. product data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getAllLocales: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseInfoLocaleObject**](../Model/ApiResponseInfoLocaleObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllStorefronts()`

```php
getAllStorefronts(): \OpenAPI\Client\Mirakl\Model\ApiResponseStringArray
```

Get values for parameter 'storefront'

Get current seller available values for the parameter 'storefront'. This parameter specifies the country of the store. Returns a list of storefronts the seller has created in the sellerportal regardless of storefront status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllStorefronts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getAllStorefronts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseStringArray**](../Model/ApiResponseStringArray.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVatIndicators()`

```php
getVatIndicators($storefront): \OpenAPI\Client\Mirakl\Model\ApiResponseCountryVatRatesArray
```

Get a list of Vat Indicators Mappings per Storefront

This endpoint provides a mapping between vat_indicators and actually used vat rates per storefront. The response yields which vat_indicators is accepted on a given storefront. The vat_indicators can (optionally) be used when creating/updating offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->getVatIndicators($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getVatIndicators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseCountryVatRatesArray**](../Model/ApiResponseCountryVatRatesArray.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
