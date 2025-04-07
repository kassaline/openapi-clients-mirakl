# OpenAPI\Client\Mirakl\ReturnsApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReturn()**](ReturnsApi.md#getReturn) | **GET** /returns/{id_return} | Get a return by ID |
| [**getReturns()**](ReturnsApi.md#getReturns) | **GET** /returns | Get a list of returns |
| [**initiateReturn()**](ReturnsApi.md#initiateReturn) | **POST** /returns | Initialize a return |
| [**updateReturn()**](ReturnsApi.md#updateReturn) | **PUT** /returns/{id_return} | Add one or more order units to an already existing return |


## `getReturn()`

```php
getReturn($idReturn, $embedded): \OpenAPI\Client\Mirakl\Model\ApiResponseReturnDetails
```

Get a return by ID

Get a return by <code>id_return</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idReturn = 675849321; // int | Return ID, unique across all returns
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ReturnEmbeddable()); // \OpenAPI\Client\Mirakl\Model\ReturnEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getReturn($idReturn, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idReturn** | **int**| Return ID, unique across all returns | |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\ReturnEmbeddable[]**](../Model/\OpenAPI\Client\Mirakl\Model\ReturnEmbeddable.md)| Additional data to be returned | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseReturnDetails**](../Model/ApiResponseReturnDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturns()`

```php
getReturns($storefront, $tsCreatedFromIso, $tsUpdatedFromIso, $trackingCode, $status, $fulfillmentType, $sort, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseReturn
```

Get a list of returns

Get a list of returns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Locale of storefront
$tsCreatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get only returns which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$tsUpdatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get only returns which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$trackingCode = 0034123456789; // string | The tracking code of a particular return
$status = [package_received]; // \OpenAPI\Client\Mirakl\Model\ReturnStatus[] | Get only returns which are in the given status
$fulfillmentType = [fulfilled_by_merchant]; // \OpenAPI\Client\Mirakl\Model\FulfillmentType[] | Get only returns which are fulfilled by the given type. <br/> The value `fulfilled_by_kaufland` is **DEPRECATED**.
$sort = ts_created:desc; // string | Specify sorting
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getReturns($storefront, $tsCreatedFromIso, $tsUpdatedFromIso, $trackingCode, $status, $fulfillmentType, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Locale of storefront | [optional] |
| **tsCreatedFromIso** | **\DateTime**| Get only returns which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional] |
| **tsUpdatedFromIso** | **\DateTime**| Get only returns which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional] |
| **trackingCode** | **string**| The tracking code of a particular return | [optional] |
| **status** | [**\OpenAPI\Client\Mirakl\Model\ReturnStatus[]**](../Model/\OpenAPI\Client\Mirakl\Model\ReturnStatus.md)| Get only returns which are in the given status | [optional] |
| **fulfillmentType** | [**\OpenAPI\Client\Mirakl\Model\FulfillmentType[]**](../Model/\OpenAPI\Client\Mirakl\Model\FulfillmentType.md)| Get only returns which are fulfilled by the given type. &lt;br/&gt; The value &#x60;fulfilled_by_kaufland&#x60; is **DEPRECATED**. | [optional] |
| **sort** | **string**| Specify sorting | [optional] [default to &#39;ts_created:desc&#39;] |
| **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseReturn**](../Model/CollectionApiResponseReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateReturn()`

```php
initiateReturn($initializeReturnRequest): \OpenAPI\Client\Mirakl\Model\ApiResponseInitializeReturn
```

Initialize a return

Initialize a return for one or more order units. All order units must belong to the same order.<br> Valid values for `reason` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=returns\" target=\"_blank\">documentation</a>.<br> `note` must be at least 5 and maximal 100 characters long.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$initializeReturnRequest = [{"id_order_unit":314567898654242,"reason":"wrong_size","note":"A note"}]; // \OpenAPI\Client\Mirakl\Model\InitializeReturnRequest[] | Request body containing return data for one or more order units

try {
    $result = $apiInstance->initiateReturn($initializeReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->initiateReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **initializeReturnRequest** | [**\OpenAPI\Client\Mirakl\Model\InitializeReturnRequest[]**](../Model/InitializeReturnRequest.md)| Request body containing return data for one or more order units | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseInitializeReturn**](../Model/ApiResponseInitializeReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReturn()`

```php
updateReturn($idReturn, $updateReturnRequest): \OpenAPI\Client\Mirakl\Model\ApiResponseUpdateReturn
```

Add one or more order units to an already existing return

Add one or more order units to an already existing return. All order units must belong to the same order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idReturn = 675849321; // string | Return ID, unique across all returns
$updateReturnRequest = [{"id_order_unit":314567898654242,"reason":"wrong_size","note":"A note"}]; // \OpenAPI\Client\Mirakl\Model\UpdateReturnRequest[] | Request body containing return data for one or more order units

try {
    $result = $apiInstance->updateReturn($idReturn, $updateReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->updateReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idReturn** | **string**| Return ID, unique across all returns | |
| **updateReturnRequest** | [**\OpenAPI\Client\Mirakl\Model\UpdateReturnRequest[]**](../Model/UpdateReturnRequest.md)| Request body containing return data for one or more order units | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseUpdateReturn**](../Model/ApiResponseUpdateReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
