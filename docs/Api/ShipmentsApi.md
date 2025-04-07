# OpenAPI\Client\Mirakl\ShipmentsApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addShipment()**](ShipmentsApi.md#addShipment) | **POST** /shipments | Add a shipment to an order unit which is already marked as sent. |


## `addShipment()`

```php
addShipment($addShipmentRequest)
```

Add a shipment to an order unit which is already marked as sent.

Add a shipment to an order unit which is already marked as sent by providing a carrier code and a tracking number.<br> Valid values for `carrier_code` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=order-files#carrier-codes\" target=\"_blank\">documentation</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addShipmentRequest = {"id_order_unit":"123456789","shipment_information":{"carrier_code":"DHL","tracking_number":"0034987654321"}}; // \OpenAPI\Client\Mirakl\Model\AddShipmentRequest | Request body containing information about a shipment related to an order unit

try {
    $apiInstance->addShipment($addShipmentRequest);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->addShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addShipmentRequest** | [**\OpenAPI\Client\Mirakl\Model\AddShipmentRequest**](../Model/AddShipmentRequest.md)| Request body containing information about a shipment related to an order unit | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
