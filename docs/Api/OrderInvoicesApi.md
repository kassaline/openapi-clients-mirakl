# OpenAPI\Client\Mirakl\OrderInvoicesApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOrderInvoice()**](OrderInvoicesApi.md#deleteOrderInvoice) | **DELETE** /order-invoices/{id_order}/{id_invoice} | Delete an order invoice by given order ID and invoice ID |
| [**getOrderInvoice()**](OrderInvoicesApi.md#getOrderInvoice) | **GET** /order-invoices/{id_order}/{id_invoice} | Get an order invoice by order ID and invoice ID |
| [**getOrderInvoices()**](OrderInvoicesApi.md#getOrderInvoices) | **GET** /order-invoices | Get a list of order invoices |
| [**uploadOrderInvoice()**](OrderInvoicesApi.md#uploadOrderInvoice) | **POST** /order-invoices/{id_order} | Upload an order invoice to a given order |


## `deleteOrderInvoice()`

```php
deleteOrderInvoice($idOrder, $idInvoice)
```

Delete an order invoice by given order ID and invoice ID

Delete an order invoice by <code>id_order</code> and <code>id_invoice</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idOrder = MB7UWLD; // string | Order ID, unique across all orders
$idInvoice = 56; // int | Invoice ID, <b>not unique</b> across all invoices.

try {
    $apiInstance->deleteOrderInvoice($idOrder, $idInvoice);
} catch (Exception $e) {
    echo 'Exception when calling OrderInvoicesApi->deleteOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrder** | **string**| Order ID, unique across all orders | |
| **idInvoice** | **int**| Invoice ID, &lt;b&gt;not unique&lt;/b&gt; across all invoices. | |

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

## `getOrderInvoice()`

```php
getOrderInvoice($idOrder, $idInvoice): \OpenAPI\Client\Mirakl\Model\ApiResponseOrderInvoice
```

Get an order invoice by order ID and invoice ID

Get an order invoice by <code>id_order</code> and <code>id_invoice</code>.<br> Note: Invoice IDs are <b>not unique</b> across all invoices as there are two types of order invoices: <ul>  <li>- Invoices uploaded by the seller</li>  <li>- Invoices provided by Kaufland.de which fall under the deemed supplier model (DSM)</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idOrder = MB7UWLD; // string | Order ID, unique across all orders
$idInvoice = 9346462; // int | Invoice ID, <b>not unique</b> across all invoices.

try {
    $result = $apiInstance->getOrderInvoice($idOrder, $idInvoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInvoicesApi->getOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrder** | **string**| Order ID, unique across all orders | |
| **idInvoice** | **int**| Invoice ID, &lt;b&gt;not unique&lt;/b&gt; across all invoices. | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseOrderInvoice**](../Model/ApiResponseOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderInvoices()`

```php
getOrderInvoices($storefront, $tsCreatedFromIso, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseOrderInvoice
```

Get a list of order invoices

Get a list of order invoices. The list contains invoices uploaded by the seller as well as invoices provided by Kaufland.de, i.e. those which fall under the deemed supplier model (DSM).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Locale of storefront
$tsCreatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getOrderInvoices($storefront, $tsCreatedFromIso, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInvoicesApi->getOrderInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Locale of storefront | [optional] |
| **tsCreatedFromIso** | **\DateTime**| Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional] |
| **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseOrderInvoice**](../Model/CollectionApiResponseOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadOrderInvoice()`

```php
uploadOrderInvoice($idOrder, $orderInvoiceUploadRequest): \OpenAPI\Client\Mirakl\Model\ApiResponseOrderInvoice
```

Upload an order invoice to a given order

Upload an order invoice to a given order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OrderInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idOrder = MB7UWLD; // string | Order ID, unique across all orders
$orderInvoiceUploadRequest = {"original_name":"invoice_MB7UWLD.pdf","mime_type":"application/pdf","data":"JVBERi0xLjQKJcOkw7zDtsOfCj...VmCjEyNzg3CiUlRU9GCg=="}; // \OpenAPI\Client\Mirakl\Model\OrderInvoiceUploadRequest | Request body containing invoice related information and binary invoice data base64 encoded

try {
    $result = $apiInstance->uploadOrderInvoice($idOrder, $orderInvoiceUploadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderInvoicesApi->uploadOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrder** | **string**| Order ID, unique across all orders | |
| **orderInvoiceUploadRequest** | [**\OpenAPI\Client\Mirakl\Model\OrderInvoiceUploadRequest**](../Model/OrderInvoiceUploadRequest.md)| Request body containing invoice related information and binary invoice data base64 encoded | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseOrderInvoice**](../Model/ApiResponseOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
