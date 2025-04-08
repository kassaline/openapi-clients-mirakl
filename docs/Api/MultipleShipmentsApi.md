# OpenAPI\Client\Mirakl\MultipleShipmentsApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sT01()**](MultipleShipmentsApi.md#sT01) | **POST** /api/shipments | Create shipments |
| [**sT06()**](MultipleShipmentsApi.md#sT06) | **PUT** /api/shipments/delete | Delete shipments |
| [**sT07()**](MultipleShipmentsApi.md#sT07) | **PUT** /api/shipments | Update shipment shipping origin |
| [**sT11()**](MultipleShipmentsApi.md#sT11) | **GET** /api/shipments | List shipments |
| [**sT12()**](MultipleShipmentsApi.md#sT12) | **GET** /api/shipments/items_to_ship | List items to ship |
| [**sT23()**](MultipleShipmentsApi.md#sT23) | **POST** /api/shipments/tracking | Update carrier tracking information for shipments |
| [**sT24()**](MultipleShipmentsApi.md#sT24) | **PUT** /api/shipments/ship | Validate shipments as shipped |
| [**sT26()**](MultipleShipmentsApi.md#sT26) | **PUT** /api/shipments/ready_for_pick_up | Validate shipments as ready to pick up |
| [**sT31()**](MultipleShipmentsApi.md#sT31) | **PUT** /api/shipments/additional_information | Update shipment additional information |


## `sT01()`

```php
sT01($shopId, $sT01Request): \OpenAPI\Client\Mirakl\Model\ST01Response201
```

Create shipments

Limited to 1000 shipments at a time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MultipleShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'sT01Request' => new \OpenAPI\Client\Mirakl\Model\ST01Request(), // \OpenAPI\Client\Mirakl\Model\ST01Request
];

try {
    $result = $apiInstance->sT01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultipleShipmentsApi->sT01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **sT01Request** | [**\OpenAPI\Client\Mirakl\Model\ST01Request**](../Model/ST01Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ST01Response201**](../Model/ST01Response201.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sT06()`

```php
sT06($shopId, $sT06Request): \OpenAPI\Client\Mirakl\Model\ST06Response200
```

Delete shipments

Limited to 1000 shipments at a time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MultipleShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'sT06Request' => new \OpenAPI\Client\Mirakl\Model\ST06Request(), // \OpenAPI\Client\Mirakl\Model\ST06Request
];

try {
    $result = $apiInstance->sT06($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultipleShipmentsApi->sT06: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **sT06Request** | [**\OpenAPI\Client\Mirakl\Model\ST06Request**](../Model/ST06Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ST06Response200**](../Model/ST06Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sT07()`

```php
sT07($shopId, $sT07Request): \OpenAPI\Client\Mirakl\Model\ST07Response200
```

Update shipment shipping origin

Limited to 100 shipments at a time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MultipleShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'sT07Request' => new \OpenAPI\Client\Mirakl\Model\ST07Request(), // \OpenAPI\Client\Mirakl\Model\ST07Request
];

try {
    $result = $apiInstance->sT07($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultipleShipmentsApi->sT07: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **sT07Request** | [**\OpenAPI\Client\Mirakl\Model\ST07Request**](../Model/ST07Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ST07Response200**](../Model/ST07Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sT11()`

```php
sT11($orderId, $shipmentStateCode, $shipmentCustomerDebitStateCode, $lastUpdatedFrom, $lastUpdatedTo, $shopId, $pageToken, $sort): \OpenAPI\Client\Mirakl\Model\ST11Response200
```

List shipments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MultipleShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderId' => array('orderId_example'), // string[] | Order id for filtering. This parameter can be supplied multiple times (order_id=OR01-A&order_id=OR02-A...).
    'shipmentStateCode' => array('shipmentStateCode_example'), // string[] | Shipment state code for filtering. This parameter can be supplied multiple times (shipment_state_code=SHIPPING&shipment_state_code=SHIPPED...).
    'shipmentCustomerDebitStateCode' => array('shipmentCustomerDebitStateCode_example'), // string[] | Shipment customer debit state code for filtering. This parameter can be supplied multiple times (shipment_customer_debit_state_code=WAITING_TAX_CONFIRMATION&shipment_customer_debit_state_code=DEBIT_OK...).
    'lastUpdatedFrom' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter shipments updated after the given date.
    'lastUpdatedTo' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter shipments updated before the given date.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'pageToken' => 'pageToken_example', // string | Token retrieved from next_page_token or previous_page_token to get to next
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->sT11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultipleShipmentsApi->sT11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | [**string[]**](../Model/string.md)| Order id for filtering. This parameter can be supplied multiple times (order_id&#x3D;OR01-A&amp;order_id&#x3D;OR02-A...). | [optional] |
| **shipmentStateCode** | [**string[]**](../Model/string.md)| Shipment state code for filtering. This parameter can be supplied multiple times (shipment_state_code&#x3D;SHIPPING&amp;shipment_state_code&#x3D;SHIPPED...). | [optional] |
| **shipmentCustomerDebitStateCode** | [**string[]**](../Model/string.md)| Shipment customer debit state code for filtering. This parameter can be supplied multiple times (shipment_customer_debit_state_code&#x3D;WAITING_TAX_CONFIRMATION&amp;shipment_customer_debit_state_code&#x3D;DEBIT_OK...). | [optional] |
| **lastUpdatedFrom** | **\DateTime**| Filter shipments updated after the given date. | [optional] |
| **lastUpdatedTo** | **\DateTime**| Filter shipments updated before the given date. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **pageToken** | **string**| Token retrieved from next_page_token or previous_page_token to get to next | [optional] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ST11Response200**](../Model/ST11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sT12()`

```php
sT12($orderId, $fulfillmentCenterCode, $shippingDateFrom, $shippingDateTo, $shopId, $pageToken, $sort): \OpenAPI\Client\Mirakl\Model\ST12Response200
```

List items to ship



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MultipleShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderId' => array('orderId_example'), // string[] | Order id for filtering. This parameter can be supplied multiple times (order_id=OR01-A&order_id=OR02-A...).
    'fulfillmentCenterCode' => array('fulfillmentCenterCode_example'), // string[] | Fulfillment center code for filtering. This parameter can be supplied multiple times (fulfillment_center_code=ABC&fulfillment_center_code=DEF...).
    'shippingDateFrom' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter items that moved to shipping status after the given date.
    'shippingDateTo' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter items that moved to shipping status before the given date.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'pageToken' => 'pageToken_example', // string | Token retrieved from next_page_token or previous_page_token to get to next
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->sT12($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultipleShipmentsApi->sT12: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | [**string[]**](../Model/string.md)| Order id for filtering. This parameter can be supplied multiple times (order_id&#x3D;OR01-A&amp;order_id&#x3D;OR02-A...). | [optional] |
| **fulfillmentCenterCode** | [**string[]**](../Model/string.md)| Fulfillment center code for filtering. This parameter can be supplied multiple times (fulfillment_center_code&#x3D;ABC&amp;fulfillment_center_code&#x3D;DEF...). | [optional] |
| **shippingDateFrom** | **\DateTime**| Filter items that moved to shipping status after the given date. | [optional] |
| **shippingDateTo** | **\DateTime**| Filter items that moved to shipping status before the given date. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **pageToken** | **string**| Token retrieved from next_page_token or previous_page_token to get to next | [optional] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ST12Response200**](../Model/ST12Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sT23()`

```php
sT23($shopId, $sT23Request): \OpenAPI\Client\Mirakl\Model\ST23Response200
```

Update carrier tracking information for shipments

If the carrier is not registered, the complete tracking url can be provided. Limited to 1000 shipments at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MultipleShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'sT23Request' => new \OpenAPI\Client\Mirakl\Model\ST23Request(), // \OpenAPI\Client\Mirakl\Model\ST23Request
];

try {
    $result = $apiInstance->sT23($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultipleShipmentsApi->sT23: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **sT23Request** | [**\OpenAPI\Client\Mirakl\Model\ST23Request**](../Model/ST23Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ST23Response200**](../Model/ST23Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sT24()`

```php
sT24($shopId, $sT24Request): \OpenAPI\Client\Mirakl\Model\ST24Response200
```

Validate shipments as shipped

Limited to 1000 shipments at a time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MultipleShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'sT24Request' => new \OpenAPI\Client\Mirakl\Model\ST24Request(), // \OpenAPI\Client\Mirakl\Model\ST24Request
];

try {
    $result = $apiInstance->sT24($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultipleShipmentsApi->sT24: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **sT24Request** | [**\OpenAPI\Client\Mirakl\Model\ST24Request**](../Model/ST24Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ST24Response200**](../Model/ST24Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sT26()`

```php
sT26($shopId, $sT26Request): \OpenAPI\Client\Mirakl\Model\ST26Response200
```

Validate shipments as ready to pick up

Limited to 1000 shipments at a time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MultipleShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'sT26Request' => new \OpenAPI\Client\Mirakl\Model\ST26Request(), // \OpenAPI\Client\Mirakl\Model\ST26Request
];

try {
    $result = $apiInstance->sT26($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultipleShipmentsApi->sT26: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **sT26Request** | [**\OpenAPI\Client\Mirakl\Model\ST26Request**](../Model/ST26Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ST26Response200**](../Model/ST26Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sT31()`

```php
sT31($shopId, $sT31Request): \OpenAPI\Client\Mirakl\Model\ST31Response200
```

Update shipment additional information

Limited to 100 shipments at a time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MultipleShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'sT31Request' => new \OpenAPI\Client\Mirakl\Model\ST31Request(), // \OpenAPI\Client\Mirakl\Model\ST31Request
];

try {
    $result = $apiInstance->sT31($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultipleShipmentsApi->sT31: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **sT31Request** | [**\OpenAPI\Client\Mirakl\Model\ST31Request**](../Model/ST31Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ST31Response200**](../Model/ST31Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
