# OpenAPI\Client\Mirakl\OrdersApi

All URIs are relative to https://miraklconnect.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptOrderLines()**](OrdersApi.md#acceptOrderLines) | **PUT** /orders/{order_id}/accept | Accept or refuse order lines |
| [**listOrders()**](OrdersApi.md#listOrders) | **GET** /orders | List Mirakl Connect orders |
| [**v2AcceptOrderLines()**](OrdersApi.md#v2AcceptOrderLines) | **PUT** /v2/orders/{order_id}/accept | Accept or refuse order lines |
| [**v2CancelOrderLines()**](OrdersApi.md#v2CancelOrderLines) | **POST** /v2/orders/{order_id}/cancel | Cancel order lines |
| [**v2GetActionStatus()**](OrdersApi.md#v2GetActionStatus) | **GET** /v2/orders/actions/{action_id} | Track an asynchronous action request |
| [**v2GetOrderTracking()**](OrdersApi.md#v2GetOrderTracking) | **GET** /v2/orders/tracking/{tracking_id} | Retrieve tracking information |
| [**v2ListOrders()**](OrdersApi.md#v2ListOrders) | **GET** /v2/orders | List Mirakl Connect orders |
| [**v2RefundOrderLines()**](OrdersApi.md#v2RefundOrderLines) | **POST** /v2/orders/{order_id}/refund | Refund order lines |


## `acceptOrderLines()`

```php
acceptOrderLines($orderId, $acceptOrderLinesRequest)
```

Accept or refuse order lines

Use this API to accept or refuse order lines that are in the <code>AWAITING_ACCEPTANCE</code> status, from Mirakl Connect. The API also synchronizes the order line status on the sales channel. We recommend integrating this API in synchronous mode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'orderId' => 0024_COMMERCIAL_ID-A, // string | Order identifier in Mirakl Connect
    'acceptOrderLinesRequest' => new \OpenAPI\Client\Mirakl\Model\AcceptOrderLinesRequest(), // \OpenAPI\Client\Mirakl\Model\AcceptOrderLinesRequest
];

try {
    $apiInstance->acceptOrderLines($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->acceptOrderLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order identifier in Mirakl Connect | |
| **acceptOrderLinesRequest** | [**\OpenAPI\Client\Mirakl\Model\AcceptOrderLinesRequest**](../Model/AcceptOrderLinesRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($orderIds, $statuses, $updatedFrom, $fulfillmentType, $pageToken, $limit, $sort): \OpenAPI\Client\Mirakl\Model\OrdersPageResponse
```

List Mirakl Connect orders

Use this API to synchronize Mirakl Connect orders with your system. We recommend integrating this API in asynchronous mode. You can retrieve all orders updated since the last call, and update your referential accordingly. To do so, schedule a task that calls this API using the <code>updated_from</code> parameter valued with the last execution time of the task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'orderIds' => array('orderIds_example'), // string[] | Filter by Connect order identifiers
    'statuses' => array('statuses_example'), // string[] | Filter by order statuses
    'updatedFrom' => 2021-01-01T08:30Z, // \DateTime | Select orders that were last updated in Mirakl Connect from the specified date time.
    'fulfillmentType' => 'fulfillmentType_example', // string | Filter by fulfillment channel
    'pageToken' => 'pageToken_example', // string | Token to access the next or previous page
    'limit' => 10, // int | Maximum number of listed orders
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->listOrders($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderIds** | [**string[]**](../Model/string.md)| Filter by Connect order identifiers | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Filter by order statuses | [optional] |
| **updatedFrom** | **\DateTime**| Select orders that were last updated in Mirakl Connect from the specified date time. | [optional] |
| **fulfillmentType** | **string**| Filter by fulfillment channel | [optional] |
| **pageToken** | **string**| Token to access the next or previous page | [optional] |
| **limit** | **int**| Maximum number of listed orders | [optional] [default to 10] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OrdersPageResponse**](../Model/OrdersPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2AcceptOrderLines()`

```php
v2AcceptOrderLines($orderId, $acceptOrderLinesRequest): \OpenAPI\Client\Mirakl\Model\AsynchronousActionResponse
```

Accept or refuse order lines

Use this API to accept or refuse order lines that are in the <code>AWAITING_ACCEPTANCE</code> status, from Mirakl Connect. The API also synchronizes the order line status on the sales channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'orderId' => 0024_COMMERCIAL_ID-A, // string | Order identifier in Mirakl Connect
    'acceptOrderLinesRequest' => new \OpenAPI\Client\Mirakl\Model\AcceptOrderLinesRequest(), // \OpenAPI\Client\Mirakl\Model\AcceptOrderLinesRequest
];

try {
    $result = $apiInstance->v2AcceptOrderLines($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->v2AcceptOrderLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order identifier in Mirakl Connect | |
| **acceptOrderLinesRequest** | [**\OpenAPI\Client\Mirakl\Model\AcceptOrderLinesRequest**](../Model/AcceptOrderLinesRequest.md)|  | |

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

## `v2CancelOrderLines()`

```php
v2CancelOrderLines($orderId, $cancelOrderLinesRequest): \OpenAPI\Client\Mirakl\Model\AsynchronousActionResponse
```

Cancel order lines

Use this API to cancel order lines (all or part) of an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'orderId' => 0024_COMMERCIAL_ID-A, // string | Order identifier in Mirakl Connect
    'cancelOrderLinesRequest' => new \OpenAPI\Client\Mirakl\Model\CancelOrderLinesRequest(), // \OpenAPI\Client\Mirakl\Model\CancelOrderLinesRequest
];

try {
    $result = $apiInstance->v2CancelOrderLines($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->v2CancelOrderLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order identifier in Mirakl Connect | |
| **cancelOrderLinesRequest** | [**\OpenAPI\Client\Mirakl\Model\CancelOrderLinesRequest**](../Model/CancelOrderLinesRequest.md)|  | |

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

## `v2GetActionStatus()`

```php
v2GetActionStatus($actionId): \OpenAPI\Client\Mirakl\Model\ActionResponse
```

Track an asynchronous action request

Use this API to check the status of an asynchronous action request  (e.g., `v2-acceptOrderLines`) and retrieve  any potential errors that occurred during the action processing. We recommend integrating this API asynchronously.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'actionId' => 1ba5fc4b-c4fd-4251-880b-3052e301bbd4, // string | The unique identifier that is returned when an asynchronous action (e.g., `v2-acceptOrderLines`) is requested.
];

try {
    $result = $apiInstance->v2GetActionStatus($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->v2GetActionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **actionId** | **string**| The unique identifier that is returned when an asynchronous action (e.g., &#x60;v2-acceptOrderLines&#x60;) is requested. | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2GetOrderTracking()`

```php
v2GetOrderTracking($trackingId): \OpenAPI\Client\Mirakl\Model\OrderTrackingResponse
```

Retrieve tracking information

This API is deprecated. Please use the new `v2-getActionStatus` API for retrieving the status of action request and potential errors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'trackingId' => 1ba5fc4b-c4fd-4251-880b-3052e301bbd4, // string | Order Tracking identifier in Mirakl Connect
];

try {
    $result = $apiInstance->v2GetOrderTracking($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->v2GetOrderTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trackingId** | **string**| Order Tracking identifier in Mirakl Connect | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OrderTrackingResponse**](../Model/OrderTrackingResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2ListOrders()`

```php
v2ListOrders($orderIds, $statuses, $updatedFrom, $fulfillmentType, $pageToken, $limit, $sort): \OpenAPI\Client\Mirakl\Model\OrdersPageResponse
```

List Mirakl Connect orders

Use this API to synchronize Mirakl Connect orders with your system. We recommend integrating this API in asynchronous mode. You can retrieve all orders updated since the last call, and update your referential accordingly. To do so, schedule a task that calls this API using the <code>updated_from</code> parameter valued with the last execution time of the task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'orderIds' => array('orderIds_example'), // string[] | Filter by Connect order identifiers
    'statuses' => array('statuses_example'), // string[] | Filter by order statuses
    'updatedFrom' => 2021-01-01T08:30Z, // \DateTime | Select orders that were last updated in Mirakl Connect from the specified date time.
    'fulfillmentType' => 'fulfillmentType_example', // string | Filter by fulfillment channel
    'pageToken' => 'pageToken_example', // string | Token to access the next or previous page
    'limit' => 10, // int | Maximum number of listed orders
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->v2ListOrders($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->v2ListOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderIds** | [**string[]**](../Model/string.md)| Filter by Connect order identifiers | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Filter by order statuses | [optional] |
| **updatedFrom** | **\DateTime**| Select orders that were last updated in Mirakl Connect from the specified date time. | [optional] |
| **fulfillmentType** | **string**| Filter by fulfillment channel | [optional] |
| **pageToken** | **string**| Token to access the next or previous page | [optional] |
| **limit** | **int**| Maximum number of listed orders | [optional] [default to 10] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OrdersPageResponse**](../Model/OrdersPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2RefundOrderLines()`

```php
v2RefundOrderLines($orderId, $refundOrderLinesRequest): \OpenAPI\Client\Mirakl\Model\AsynchronousActionResponse
```

Refund order lines

Use this API to refund order lines (all or part) of an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Mirakl\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'orderId' => 0024_COMMERCIAL_ID-A, // string | Order identifier in Mirakl Connect
    'refundOrderLinesRequest' => new \OpenAPI\Client\Mirakl\Model\RefundOrderLinesRequest(), // \OpenAPI\Client\Mirakl\Model\RefundOrderLinesRequest
];

try {
    $result = $apiInstance->v2RefundOrderLines($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->v2RefundOrderLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order identifier in Mirakl Connect | |
| **refundOrderLinesRequest** | [**\OpenAPI\Client\Mirakl\Model\RefundOrderLinesRequest**](../Model/RefundOrderLinesRequest.md)|  | |

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
