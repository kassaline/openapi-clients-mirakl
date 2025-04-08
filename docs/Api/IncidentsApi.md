# OpenAPI\Client\Mirakl\IncidentsApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oR64()**](IncidentsApi.md#oR64) | **PUT** /api/orders/{order_id}/lines/{line}/resolve_incident | Mark an incident as resolved |


## `oR64()`

```php
oR64($orderId, $line, $shopId, $oR64Request)
```

Mark an incident as resolved



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderId' => 'orderId_example', // string | Order identifier
    'line' => 'line_example', // string | Order line identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oR64Request' => new \OpenAPI\Client\Mirakl\Model\OR64Request(), // \OpenAPI\Client\Mirakl\Model\OR64Request
];

try {
    $apiInstance->oR64($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->oR64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order identifier | |
| **line** | **string**| Order line identifier | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oR64Request** | [**\OpenAPI\Client\Mirakl\Model\OR64Request**](../Model/OR64Request.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
