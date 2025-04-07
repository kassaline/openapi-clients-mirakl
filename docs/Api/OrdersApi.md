# OpenAPI\Client\Mirakl\OrdersApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /orders/{id_order} | Get an order by ID |
| [**getOrders()**](OrdersApi.md#getOrders) | **GET** /orders | Get a list of orders |


## `getOrder()`

```php
getOrder($idOrder, $embedded): \OpenAPI\Client\Mirakl\Model\ApiResponseOrderDetails
```

Get an order by ID

Get an order by <code>id_order</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idOrder = MB7UWLD; // string | Order ID, unique across all orders
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\OrderEmbeddable()); // \OpenAPI\Client\Mirakl\Model\OrderEmbeddable[] | Add 'order_invoices' to get order related invoices in the response.

try {
    $result = $apiInstance->getOrder($idOrder, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrder** | **string**| Order ID, unique across all orders | |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\OrderEmbeddable[]**](../Model/\OpenAPI\Client\Mirakl\Model\OrderEmbeddable.md)| Add &#39;order_invoices&#39; to get order related invoices in the response. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseOrderDetails**](../Model/ApiResponseOrderDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($storefront, $tsCreatedFromIso, $tsUnitsUpdatedFromIso, $fulfillmentType, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseOrder
```

Get a list of orders

Get a list of orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Locale of storefront
$tsCreatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get only orders which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$tsUnitsUpdatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get only orders which units were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$fulfillmentType = [fulfilled_by_merchant]; // \OpenAPI\Client\Mirakl\Model\FulfillmentType[] | Get only orders which are fulfilled by the given type. <br/> The value `fulfilled_by_kaufland` is **DEPRECATED**.
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getOrders($storefront, $tsCreatedFromIso, $tsUnitsUpdatedFromIso, $fulfillmentType, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Locale of storefront | [optional] |
| **tsCreatedFromIso** | **\DateTime**| Get only orders which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional] |
| **tsUnitsUpdatedFromIso** | **\DateTime**| Get only orders which units were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional] |
| **fulfillmentType** | [**\OpenAPI\Client\Mirakl\Model\FulfillmentType[]**](../Model/\OpenAPI\Client\Mirakl\Model\FulfillmentType.md)| Get only orders which are fulfilled by the given type. &lt;br/&gt; The value &#x60;fulfilled_by_kaufland&#x60; is **DEPRECATED**. | [optional] |
| **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseOrder**](../Model/CollectionApiResponseOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
