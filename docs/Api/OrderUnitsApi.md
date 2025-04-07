# OpenAPI\Client\Mirakl\OrderUnitsApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOrderUnit()**](OrderUnitsApi.md#cancelOrderUnit) | **PATCH** /order-units/{id_order_unit}/cancel | Cancel an order unit |
| [**fulfilOrderUnit()**](OrderUnitsApi.md#fulfilOrderUnit) | **PATCH** /order-units/{id_order_unit}/fulfil | Mark an order unit to be in fulfillment |
| [**getOrderUnit()**](OrderUnitsApi.md#getOrderUnit) | **GET** /order-units/{id_order_unit} | Get an order unit by ID |
| [**getOrderUnits()**](OrderUnitsApi.md#getOrderUnits) | **GET** /order-units | Get a list of order units |
| [**refundOrderUnit()**](OrderUnitsApi.md#refundOrderUnit) | **PATCH** /order-units/{id_order_unit}/refund | Send a refund to a customer |
| [**sendOrderUnit()**](OrderUnitsApi.md#sendOrderUnit) | **PATCH** /order-units/{id_order_unit}/send | Mark an order unit as sent |


## `cancelOrderUnit()`

```php
cancelOrderUnit($idOrderUnit, $orderUnitCancelRequest)
```

Cancel an order unit

Cancel an order unit. Valid values for `reason` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=order-files#cancellation-reasons\" target=\"_blank\">documentation</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idOrderUnit = 314567898654242; // int | Order unit ID, unique across all order units
$orderUnitCancelRequest = new \OpenAPI\Client\Mirakl\Model\OrderUnitCancelRequest(); // \OpenAPI\Client\Mirakl\Model\OrderUnitCancelRequest | Reason of the cancellation

try {
    $apiInstance->cancelOrderUnit($idOrderUnit, $orderUnitCancelRequest);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->cancelOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrderUnit** | **int**| Order unit ID, unique across all order units | |
| **orderUnitCancelRequest** | [**\OpenAPI\Client\Mirakl\Model\OrderUnitCancelRequest**](../Model/OrderUnitCancelRequest.md)| Reason of the cancellation | |

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

## `fulfilOrderUnit()`

```php
fulfilOrderUnit($idOrderUnit)
```

Mark an order unit to be in fulfillment

Mark an order unit to be in fulfillment (It will update the order unit status to `need_to_be_sent`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idOrderUnit = 314567898654242; // int | Order unit ID, unique across all order units

try {
    $apiInstance->fulfilOrderUnit($idOrderUnit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->fulfilOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrderUnit** | **int**| Order unit ID, unique across all order units | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderUnit()`

```php
getOrderUnit($idOrderUnit, $embedded): \OpenAPI\Client\Mirakl\Model\ApiResponseOrderUnitDetails
```

Get an order unit by ID

Get an order unit by <code>id_order_unit</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idOrderUnit = 314567898654242; // int | Order unit ID, unique across all order units
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\OrderUnitEmbeddable()); // \OpenAPI\Client\Mirakl\Model\OrderUnitEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getOrderUnit($idOrderUnit, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->getOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrderUnit** | **int**| Order unit ID, unique across all order units | |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\OrderUnitEmbeddable[]**](../Model/\OpenAPI\Client\Mirakl\Model\OrderUnitEmbeddable.md)| Additional data to be returned | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseOrderUnitDetails**](../Model/ApiResponseOrderUnitDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderUnits()`

```php
getOrderUnits($storefront, $idOffer, $status, $tsCreatedFromIso, $tsUpdatedFromIso, $fulfillmentType, $sort, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseOrderUnit
```

Get a list of order units

Get a list of order units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Locale of storefront
$idOffer = 'idOffer_example'; // string | Unique ID for offer(s)
$status = need_to_be_sent; // \OpenAPI\Client\Mirakl\Model\OrderUnitStatus[] | Get only order units which are in the given status
$tsCreatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$tsUpdatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get only order units which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$fulfillmentType = [fulfilled_by_merchant]; // \OpenAPI\Client\Mirakl\Model\FulfillmentType[] | Get only order units which are fulfilled by the given type. <br/> The value `fulfilled_by_kaufland` is **DEPRECATED**.
$sort = ts_created:desc; // string | Specify sorting
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getOrderUnits($storefront, $idOffer, $status, $tsCreatedFromIso, $tsUpdatedFromIso, $fulfillmentType, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->getOrderUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Locale of storefront | [optional] |
| **idOffer** | **string**| Unique ID for offer(s) | [optional] |
| **status** | [**\OpenAPI\Client\Mirakl\Model\OrderUnitStatus[]**](../Model/\OpenAPI\Client\Mirakl\Model\OrderUnitStatus.md)| Get only order units which are in the given status | [optional] |
| **tsCreatedFromIso** | **\DateTime**| Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional] |
| **tsUpdatedFromIso** | **\DateTime**| Get only order units which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional] |
| **fulfillmentType** | [**\OpenAPI\Client\Mirakl\Model\FulfillmentType[]**](../Model/\OpenAPI\Client\Mirakl\Model\FulfillmentType.md)| Get only order units which are fulfilled by the given type. &lt;br/&gt; The value &#x60;fulfilled_by_kaufland&#x60; is **DEPRECATED**. | [optional] |
| **sort** | **string**| Specify sorting | [optional] [default to &#39;ts_created:desc&#39;] |
| **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseOrderUnit**](../Model/CollectionApiResponseOrderUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundOrderUnit()`

```php
refundOrderUnit($idOrderUnit, $orderUnitRefundRequest)
```

Send a refund to a customer

Send a refund to a customer for a particular order unit.<br>`amount` must be in Eurocents.<br> Allowed values for `reason` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=orders#refunding-order-unit\" target=\"_blank\">documentation</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idOrderUnit = 314567898654242; // int | Order unit ID, unique across all order units
$orderUnitRefundRequest = {"amount":1299,"reason":"delivery_delay"}; // \OpenAPI\Client\Mirakl\Model\OrderUnitRefundRequest | Request body containing amount and reason of the refund.

try {
    $apiInstance->refundOrderUnit($idOrderUnit, $orderUnitRefundRequest);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->refundOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrderUnit** | **int**| Order unit ID, unique across all order units | |
| **orderUnitRefundRequest** | [**\OpenAPI\Client\Mirakl\Model\OrderUnitRefundRequest**](../Model/OrderUnitRefundRequest.md)| Request body containing amount and reason of the refund. | |

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

## `sendOrderUnit()`

```php
sendOrderUnit($idOrderUnit, $orderUnitSendRequest)
```

Mark an order unit as sent

Mark an order unit as sent. Valid values for `carrier_code` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=order-files#carrier-codes\" target=\"_blank\">documentation</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idOrderUnit = 314567898654242; // int | Order unit ID, unique across all order units
$orderUnitSendRequest = {"tracking_numbers":"0034123456789,0034987654321","carrier_code":"DHL"}; // \OpenAPI\Client\Mirakl\Model\OrderUnitSendRequest | Request body containing tracking number(s) and carrier code of the shipment(s)

try {
    $apiInstance->sendOrderUnit($idOrderUnit, $orderUnitSendRequest);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->sendOrderUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrderUnit** | **int**| Order unit ID, unique across all order units | |
| **orderUnitSendRequest** | [**\OpenAPI\Client\Mirakl\Model\OrderUnitSendRequest**](../Model/OrderUnitSendRequest.md)| Request body containing tracking number(s) and carrier code of the shipment(s) | |

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
