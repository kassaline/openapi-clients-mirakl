# OpenAPI\Client\Mirakl\ShipmentsApi

All URIs are relative to https://miraklconnect.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShipment()**](ShipmentsApi.md#createShipment) | **POST** /orders/{order_id}/shipments | Ship items of a Connect order |
| [**v2CreateShipment()**](ShipmentsApi.md#v2CreateShipment) | **POST** /v2/orders/{order_id}/shipments | Ship items of a Connect order |


## `createShipment()`

```php
createShipment($orderId, $createShipmentRequest): \OpenAPI\Client\Mirakl\Model\ShipmentResponse
```

Ship items of a Connect order

Use this API to ship one or more items from the same order within the same package (using the same tracking information). We recommend integrating this API in synchronous mode, directly in your shipment creation process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'orderId' => 1328ab88-0412-40f9-bc8f-deb4e338fb84, // string | Connect order identifier
    'createShipmentRequest' => new \OpenAPI\Client\Mirakl\Model\CreateShipmentRequest(), // \OpenAPI\Client\Mirakl\Model\CreateShipmentRequest | Shipment object and its items' details
];

try {
    $result = $apiInstance->createShipment($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Connect order identifier | |
| **createShipmentRequest** | [**\OpenAPI\Client\Mirakl\Model\CreateShipmentRequest**](../Model/CreateShipmentRequest.md)| Shipment object and its items&#39; details | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CreateShipment()`

```php
v2CreateShipment($orderId, $createShipmentRequest): \OpenAPI\Client\Mirakl\Model\AsynchronousActionResponse
```

Ship items of a Connect order

Use this API to ship one or more items from the same order within the same package (using the same tracking information).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'orderId' => 1328ab88-0412-40f9-bc8f-deb4e338fb84, // string | Connect order identifier
    'createShipmentRequest' => new \OpenAPI\Client\Mirakl\Model\CreateShipmentRequest(), // \OpenAPI\Client\Mirakl\Model\CreateShipmentRequest | Shipment object and its items' details
];

try {
    $result = $apiInstance->v2CreateShipment($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v2CreateShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Connect order identifier | |
| **createShipmentRequest** | [**\OpenAPI\Client\Mirakl\Model\CreateShipmentRequest**](../Model/CreateShipmentRequest.md)| Shipment object and its items&#39; details | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\AsynchronousActionResponse**](../Model/AsynchronousActionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
