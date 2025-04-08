# OpenAPI\Client\Mirakl\OrdersApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oR04()**](OrdersApi.md#oR04) | **PUT** /api/orders | Patch update orders |
| [**oR07()**](OrdersApi.md#oR07) | **PUT** /api/orders/shipping_from | Update order line shipping origin |
| [**oR11()**](OrdersApi.md#oR11) | **GET** /api/orders | List orders with pagination |
| [**oR13()**](OrdersApi.md#oR13) | **POST** /api/orders/async-export | Export orders asynchronously |
| [**oR14()**](OrdersApi.md#oR14) | **GET** /api/orders/async-export/status/{tracking_id} | Get the status of an asynchronous order export. |
| [**oR21()**](OrdersApi.md#oR21) | **PUT** /api/orders/{order_id}/accept | Accept or refuse order lines |
| [**oR23()**](OrdersApi.md#oR23) | **PUT** /api/orders/{order_id}/tracking | Update carrier tracking information for a specific order |
| [**oR24()**](OrdersApi.md#oR24) | **PUT** /api/orders/{order_id}/ship | Validate the shipment of an order |
| [**oR28()**](OrdersApi.md#oR28) | **PUT** /api/orders/refund | Perform refunds on order lines |
| [**oR29()**](OrdersApi.md#oR29) | **PUT** /api/orders/{order_id}/cancel | Perform a full cancelation of an order |
| [**oR30()**](OrdersApi.md#oR30) | **PUT** /api/orders/cancel | Perform cancelations on order lines |
| [**oR31()**](OrdersApi.md#oR31) | **PUT** /api/orders/{order_id}/additional_fields | Update the custom fields of an order and its order lines |
| [**oR32()**](OrdersApi.md#oR32) | **PUT** /api/orders/adjust | Adjust order line |
| [**oR51()**](OrdersApi.md#oR51) | **GET** /api/orders/{order_id}/evaluation | Get the evaluation of an order |
| [**oR72()**](OrdersApi.md#oR72) | **GET** /api/orders/documents | Lists order&#39;s documents |
| [**oR73()**](OrdersApi.md#oR73) | **GET** /api/orders/documents/download | Download one or multiple documents attached to one or multiple orders |
| [**oR75()**](OrdersApi.md#oR75) | **GET** /api/orders/taxes | List all the order taxes available on the platform |
| [**oR76()**](OrdersApi.md#oR76) | **DELETE** /api/orders/documents/{document_id} | Delete an order document |


## `oR04()`

```php
oR04($shopId, $oR04Request): \OpenAPI\Client\Mirakl\Model\OR04Response200
```

Patch update orders

<p>Update orders information field by field: unspecified fields will not be updated. To remove the value for a field, send it with the 'null' value (not allowed for the required fields).</p><p>You cannot use API OR04 to update customer-related information if the customer has been anonymized via API AN01.</p><p><span class='red'>A maximum of 100 orders can be sent at once.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oR04Request' => new \OpenAPI\Client\Mirakl\Model\OR04Request(), // \OpenAPI\Client\Mirakl\Model\OR04Request
];

try {
    $result = $apiInstance->oR04($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR04: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oR04Request** | [**\OpenAPI\Client\Mirakl\Model\OR04Request**](../Model/OR04Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR04Response200**](../Model/OR04Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR07()`

```php
oR07($shopId, $oR07Request): \OpenAPI\Client\Mirakl\Model\OR07Response200
```

Update order line shipping origin

<p>Update shipping origin (<code>shipping_from</code>) information on order lines.</p> <p><span class='red'>A maximum of 100 order lines can be sent at once.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oR07Request' => new \OpenAPI\Client\Mirakl\Model\OR07Request(), // \OpenAPI\Client\Mirakl\Model\OR07Request
];

try {
    $result = $apiInstance->oR07($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR07: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oR07Request** | [**\OpenAPI\Client\Mirakl\Model\OR07Request**](../Model/OR07Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR07Response200**](../Model/OR07Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR11()`

```php
oR11($orderIds, $orderReferencesForCustomer, $orderReferencesForSeller, $orderStateCodes, $channelCodes, $onlyNullChannel, $startDate, $endDate, $startUpdateDate, $endUpdateDate, $customerDebited, $paymentWorkflow, $hasIncident, $fulfillmentCenterCode, $orderTaxMode, $shopId, $locale, $max, $offset, $sort, $order): \OpenAPI\Client\Mirakl\Model\OR11Response200
```

List orders with pagination

Pagination is enabled by default. For large requests, use asynchronous order export APIs OR13, OR14 and OR15 instead.<br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderIds' => 'orderIds_example', // string | A comma-separated list of order's identifiers
    'orderReferencesForCustomer' => 'orderReferencesForCustomer_example', // string | A comma-separated list of order references for customer
    'orderReferencesForSeller' => 'orderReferencesForSeller_example', // string | A comma-separated list of order references for seller
    'orderStateCodes' => 'orderStateCodes_example', // string | A comma-separated list of order state's codes
    'channelCodes' => 'channelCodes_example', // string | A comma-separated list of channel codes
    'onlyNullChannel' => false, // bool | Return only orders without channel. If <code>true</code>, ignore the <code>channel_codes</code>
    'startDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Start creation date for filtering
    'endDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | End creation date for filtering
    'startUpdateDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Start update date for filtering. Mirakl will subtract a time delta to ensure no orders are missed due to network and/or software latency.
    'endUpdateDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | End update date for filtering
    'customerDebited' => True, // bool | Order paid by customer
    'paymentWorkflow' => 'paymentWorkflow_example', // string | Payment workflow of an order
    'hasIncident' => false, // bool | If <code>true</code> returns only orders with incidents in progress, if <code>false</code> returns orders without incidents in progress
    'fulfillmentCenterCode' => array('fulfillmentCenterCode_example'), // string[] | Code of the fulfillment center
    'orderTaxMode' => 'orderTaxMode_example', // string | Please note: If the taxes are not specified, the prices with mode TAX_EXCLUDED and with mode TAX_INCLUDED will return the same amounts.<br>Possible values:<ul><li><code>TAX_EXCLUDED</code>: the price fields (price, unit price, shipping price, cancellation amount, refund amount and order total prices) do not include taxes.</li><li><code>TAX_INCLUDED</code>: the price fields include the tax amount. </li></ul><li>If this query parameter is not specified, the default order tax mode of the platform is used.</li>
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
    'max' => 56, // int | Maximum number of items returned per page
    'offset' => 56, // int | Index of the first item (among all the results) in the returned page
    'sort' => 'sort_example', // string | How the results should be sorted
    'order' => 'order_example', // string | Sort direction
];

try {
    $result = $apiInstance->oR11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderIds** | **string**| A comma-separated list of order&#39;s identifiers | [optional] |
| **orderReferencesForCustomer** | **string**| A comma-separated list of order references for customer | [optional] |
| **orderReferencesForSeller** | **string**| A comma-separated list of order references for seller | [optional] |
| **orderStateCodes** | **string**| A comma-separated list of order state&#39;s codes | [optional] |
| **channelCodes** | **string**| A comma-separated list of channel codes | [optional] |
| **onlyNullChannel** | **bool**| Return only orders without channel. If &lt;code&gt;true&lt;/code&gt;, ignore the &lt;code&gt;channel_codes&lt;/code&gt; | [optional] [default to false] |
| **startDate** | **\DateTime**| Start creation date for filtering | [optional] |
| **endDate** | **\DateTime**| End creation date for filtering | [optional] |
| **startUpdateDate** | **\DateTime**| Start update date for filtering. Mirakl will subtract a time delta to ensure no orders are missed due to network and/or software latency. | [optional] |
| **endUpdateDate** | **\DateTime**| End update date for filtering | [optional] |
| **customerDebited** | **bool**| Order paid by customer | [optional] |
| **paymentWorkflow** | **string**| Payment workflow of an order | [optional] |
| **hasIncident** | **bool**| If &lt;code&gt;true&lt;/code&gt; returns only orders with incidents in progress, if &lt;code&gt;false&lt;/code&gt; returns orders without incidents in progress | [optional] [default to false] |
| **fulfillmentCenterCode** | [**string[]**](../Model/string.md)| Code of the fulfillment center | [optional] |
| **orderTaxMode** | **string**| Please note: If the taxes are not specified, the prices with mode TAX_EXCLUDED and with mode TAX_INCLUDED will return the same amounts.&lt;br&gt;Possible values:&lt;ul&gt;&lt;li&gt;&lt;code&gt;TAX_EXCLUDED&lt;/code&gt;: the price fields (price, unit price, shipping price, cancellation amount, refund amount and order total prices) do not include taxes.&lt;/li&gt;&lt;li&gt;&lt;code&gt;TAX_INCLUDED&lt;/code&gt;: the price fields include the tax amount. &lt;/li&gt;&lt;/ul&gt;&lt;li&gt;If this query parameter is not specified, the default order tax mode of the platform is used.&lt;/li&gt; | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |
| **max** | **int**| Maximum number of items returned per page | [optional] |
| **offset** | **int**| Index of the first item (among all the results) in the returned page | [optional] |
| **sort** | **string**| How the results should be sorted | [optional] |
| **order** | **string**| Sort direction | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR11Response200**](../Model/OR11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR13()`

```php
oR13($shopId, $locale, $oR13Request): \OpenAPI\Client\Mirakl\Model\OR13Response200
```

Export orders asynchronously

<p>The API returns a tracking id to be used to query API OR14.<br />Mirakl recommends to use API OR13 instead of API OR11 as it can handle very large volumes of data.<br />You must give at least one date range filter: created or last updated date.<br />API OR13 supports the chunk of the export file into multiple files in order to:</p><ul><li>respect a maximum megabyte weight using the <code>megabytes_per_chunk</code> parameter.</li><li>respect a maximum amount of exported items using the <code>items_per_chunk</code> parameter.</li></ul><br />Only one export request can be created for the same shop account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
    'oR13Request' => new \OpenAPI\Client\Mirakl\Model\OR13Request(), // \OpenAPI\Client\Mirakl\Model\OR13Request
];

try {
    $result = $apiInstance->oR13($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR13: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |
| **oR13Request** | [**\OpenAPI\Client\Mirakl\Model\OR13Request**](../Model/OR13Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR13Response200**](../Model/OR13Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR14()`

```php
oR14($trackingId, $shopId): \OpenAPI\Client\Mirakl\Model\OR14Response200
```

Get the status of an asynchronous order export.

<p>Use this API to query the order export status after an API OR13 call.<br />Until the export via API OR13 is complete, the status returned by API OR14 is <code>PENDING</code>.<br />You must call API OR14 until you get the <code>COMPLETED</code> status which correspond to a completed and successful export from API OR13.<br />The URLs in API OR14 response contain all the files from API OR13 export.<br />Browse those urls and query them using the GET method.<br />In case of error, the status is <code>FAILED</code>.<br />In case of export canceled, the status is <code>CANCELED</code>.<br /></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'trackingId' => 'trackingId_example', // string | Id of the previously created asynchronous order export
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->oR14($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR14: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trackingId** | **string**| Id of the previously created asynchronous order export | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR14Response200**](../Model/OR14Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR21()`

```php
oR21($orderId, $shopId, $oR21Request)
```

Accept or refuse order lines

Accept or refuse order lines in the <code>WAITING_ACCEPTANCE</code> status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderId' => 'orderId_example', // string | Order's identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oR21Request' => new \OpenAPI\Client\Mirakl\Model\OR21Request(), // \OpenAPI\Client\Mirakl\Model\OR21Request
];

try {
    $apiInstance->oR21($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR21: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order&#39;s identifier | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oR21Request** | [**\OpenAPI\Client\Mirakl\Model\OR21Request**](../Model/OR21Request.md)|  | [optional] |

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

## `oR23()`

```php
oR23($orderId, $shopId, $oR23Request)
```

Update carrier tracking information for a specific order

If the carrier is not registered, the complete tracking url can be provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderId' => 'orderId_example', // string | Order identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oR23Request' => new \OpenAPI\Client\Mirakl\Model\OR23Request(), // \OpenAPI\Client\Mirakl\Model\OR23Request
];

try {
    $apiInstance->oR23($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR23: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order identifier | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oR23Request** | [**\OpenAPI\Client\Mirakl\Model\OR23Request**](../Model/OR23Request.md)|  | [optional] |

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

## `oR24()`

```php
oR24($orderId, $shopId)
```

Validate the shipment of an order

Validate the shipment of an order in the <code>SHIPPING</code> status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderId' => 'orderId_example', // string | Order's identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $apiInstance->oR24($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR24: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order&#39;s identifier | |
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

## `oR28()`

```php
oR28($shopId, $oR28Request): \OpenAPI\Client\Mirakl\Model\OR28Response200
```

Perform refunds on order lines



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oR28Request' => new \OpenAPI\Client\Mirakl\Model\OR28Request(), // \OpenAPI\Client\Mirakl\Model\OR28Request
];

try {
    $result = $apiInstance->oR28($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR28: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oR28Request** | [**\OpenAPI\Client\Mirakl\Model\OR28Request**](../Model/OR28Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR28Response200**](../Model/OR28Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR29()`

```php
oR29($orderId, $shopId)
```

Perform a full cancelation of an order



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderId' => 'orderId_example', // string | Order's identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $apiInstance->oR29($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR29: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order&#39;s identifier | |
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

## `oR30()`

```php
oR30($shopId, $oR30Request): \OpenAPI\Client\Mirakl\Model\OR30Response200
```

Perform cancelations on order lines



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oR30Request' => new \OpenAPI\Client\Mirakl\Model\OR30Request(), // \OpenAPI\Client\Mirakl\Model\OR30Request
];

try {
    $result = $apiInstance->oR30($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR30: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oR30Request** | [**\OpenAPI\Client\Mirakl\Model\OR30Request**](../Model/OR30Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR30Response200**](../Model/OR30Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR31()`

```php
oR31($orderId, $shopId, $oR31Request): \OpenAPI\Client\Mirakl\Model\OR31Response200
```

Update the custom fields of an order and its order lines

Only specified custom field values will be updated.<br/>In order to delete an custom field's value, set it to null or an empty string. Note that you may not delete the value of a required custom field value.<br/>Output will return information on the status of the update attempt by giving:<ul>    <li>either all of the order and its order lines custom field values after the update</li>    <li>or in case of errors, the list of errors and the body of the initial call</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderId' => 'orderId_example', // string | Order identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oR31Request' => new \OpenAPI\Client\Mirakl\Model\OR31Request(), // \OpenAPI\Client\Mirakl\Model\OR31Request
];

try {
    $result = $apiInstance->oR31($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR31: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order identifier | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oR31Request** | [**\OpenAPI\Client\Mirakl\Model\OR31Request**](../Model/OR31Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR31Response200**](../Model/OR31Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR32()`

```php
oR32($shopId, $oR32Request): \OpenAPI\Client\Mirakl\Model\OR32Response200
```

Adjust order line

<p>Update order line actual measurement: it will create a refund or cancelation associated to the order line. </p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oR32Request' => new \OpenAPI\Client\Mirakl\Model\OR32Request(), // \OpenAPI\Client\Mirakl\Model\OR32Request
];

try {
    $result = $apiInstance->oR32($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR32: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oR32Request** | [**\OpenAPI\Client\Mirakl\Model\OR32Request**](../Model/OR32Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR32Response200**](../Model/OR32Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR51()`

```php
oR51($orderId, $shopId, $locale): \OpenAPI\Client\Mirakl\Model\OR51Response200
```

Get the evaluation of an order



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderId' => 'orderId_example', // string
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->oR51($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR51: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**|  | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR51Response200**](../Model/OR51Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR72()`

```php
oR72($orderIds, $shopId): \OpenAPI\Client\Mirakl\Model\OR72Response200
```

Lists order's documents

Returns a list of all the documents available on the order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderIds' => 'orderIds_example', // string | the orders' identifiers, using comma as separator
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->oR72($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR72: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderIds** | **string**| the orders&#39; identifiers, using comma as separator | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR72Response200**](../Model/OR72Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR73()`

```php
oR73($orderIds, $documentIds, $documentCodes, $shopId): \SplFileObject
```

Download one or multiple documents attached to one or multiple orders

<ul>   <li>If a list of document identifiers is specified only these documents are downloaded.       <ul>           <li>If more than one document id is specified, the documents will be wrapped in a ZIP archive</li>           <li>If only one document id is specified the document will not be zipped</li>       </ul>   </li>   <li>If a list of order identifiers is specified, all documents from those orders are downloaded.<br/>   Use a list of order document type codes to retrieve specific types from those orders.<br/>   In this case, the output of the API will always be a ZIP archive even if there is only one document to retrieve.   </li></ul>When documents are retrieved, they're wrapped into a ZIP archive except when only one document id is specified. The tree structure of this archive is as follow:<pre> documents-timestamp.zip | |__ order_id_x/ |   |__ foo.txt |   |__ bar.txt |   |__ baz.pdf | |__ order_id_y/ |   |__ image.png |   |__ image(1).png </pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'orderIds' => 'orderIds_example', // string | A list of identifiers of the orders (separated by a comma)
    'documentIds' => 'documentIds_example', // string | A list of document identifiers (separated by a comma)
    'documentCodes' => 'documentCodes_example', // string | A list of document type codes (separated by a comma)
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->oR73($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR73: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderIds** | **string**| A list of identifiers of the orders (separated by a comma) | [optional] |
| **documentIds** | **string**| A list of document identifiers (separated by a comma) | [optional] |
| **documentCodes** | **string**| A list of document type codes (separated by a comma) | [optional] |
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

## `oR75()`

```php
oR75($shopId, $locale): \OpenAPI\Client\Mirakl\Model\OR75Response200
```

List all the order taxes available on the platform



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->oR75($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR75: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OR75Response200**](../Model/OR75Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oR76()`

```php
oR76($documentId, $shopId)
```

Delete an order document



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'documentId' => 56, // int | Identifier of the document to delete
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $apiInstance->oR76($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->oR76: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **int**| Identifier of the document to delete | |
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
