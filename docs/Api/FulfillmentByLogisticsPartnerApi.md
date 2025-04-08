# OpenAPI\Client\Mirakl\FulfillmentByLogisticsPartnerApi

All URIs are relative to https://miraklconnect.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fUL01()**](FulfillmentByLogisticsPartnerApi.md#fUL01) | **POST** /api/fulfillment/inventory | Synchronize inventory as a logistics partner |
| [**fUL06()**](FulfillmentByLogisticsPartnerApi.md#fUL06) | **GET** /api/fulfillment/shipping/types | List shipping methods as a logistics partner |


## `fUL01()`

```php
fUL01($file)
```

Synchronize inventory as a logistics partner

Synchronize inventory on all the marketplaces where the seller fulfills its orders via a fulfillment center.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\FulfillmentByLogisticsPartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'file' => '/path/to/file.txt', // \SplFileObject | JSON file containing the list of offers to synchronize. The offer sku has to exist on the marketplace. Use <code>multipart/form-data</code> with name <code>file</code>.<br/> JSON format:<br/><pre>[{<br/> \\\"offer_sku\\\": \\\"Offer SKU on the marketplace\\\",<br/> \\\"gtin\\\": \\\"Product barcode\\\",<br/> \\\"product_title\\\": \\\"Product title\\\",<br/> \\\"quantity\\\": \\\"Product quantity for this offer\\\"<br/>}]</pre>
];

try {
    $apiInstance->fUL01($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentByLogisticsPartnerApi->fUL01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| JSON file containing the list of offers to synchronize. The offer sku has to exist on the marketplace. Use &lt;code&gt;multipart/form-data&lt;/code&gt; with name &lt;code&gt;file&lt;/code&gt;.&lt;br/&gt; JSON format:&lt;br/&gt;&lt;pre&gt;[{&lt;br/&gt; \\\&quot;offer_sku\\\&quot;: \\\&quot;Offer SKU on the marketplace\\\&quot;,&lt;br/&gt; \\\&quot;gtin\\\&quot;: \\\&quot;Product barcode\\\&quot;,&lt;br/&gt; \\\&quot;product_title\\\&quot;: \\\&quot;Product title\\\&quot;,&lt;br/&gt; \\\&quot;quantity\\\&quot;: \\\&quot;Product quantity for this offer\\\&quot;&lt;br/&gt;}]&lt;/pre&gt; | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fUL06()`

```php
fUL06(): \OpenAPI\Client\Mirakl\Model\FUL06Response200
```

List shipping methods as a logistics partner

List all active shipping methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\FulfillmentByLogisticsPartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
];

try {
    $result = $apiInstance->fUL06($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentByLogisticsPartnerApi->fUL06: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Mirakl\Model\FUL06Response200**](../Model/FUL06Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
