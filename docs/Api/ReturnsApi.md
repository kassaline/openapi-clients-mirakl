# OpenAPI\Client\Mirakl\ReturnsApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rT04()**](ReturnsApi.md#rT04) | **PUT** /api/returns | Patch update returns |
| [**rT11()**](ReturnsApi.md#rT11) | **GET** /api/returns | List returns |
| [**rT21()**](ReturnsApi.md#rT21) | **PUT** /api/returns/accept | Accept or refuse a return request |
| [**rT25()**](ReturnsApi.md#rT25) | **PUT** /api/returns/receive | Validate returns as received |
| [**rT26()**](ReturnsApi.md#rT26) | **PUT** /api/returns/compliance | Mark a return as compliant or non compliant |


## `rT04()`

```php
rT04($shopId, $rT04Request): \OpenAPI\Client\Mirakl\Model\RT04Response200
```

Patch update returns



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'rT04Request' => new \OpenAPI\Client\Mirakl\Model\RT04Request(), // \OpenAPI\Client\Mirakl\Model\RT04Request
];

try {
    $result = $apiInstance->rT04($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->rT04: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **rT04Request** | [**\OpenAPI\Client\Mirakl\Model\RT04Request**](../Model/RT04Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\RT04Response200**](../Model/RT04Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rT11()`

```php
rT11($returnId, $returnState, $returnCreationDateFrom, $returnCreationDateTo, $returnLastUpdatedFrom, $returnLastUpdatedTo, $orderCommercialId, $orderLineId, $returnRma, $customerId, $shopId, $pageToken, $sort): \OpenAPI\Client\Mirakl\Model\RT11Response200
```

List returns



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'returnId' => array('returnId_example'), // string[] | Return id for filtering. This parameter can be supplied multiple times (return_id=58fd00d1-4ea4-453e-9a56-ec28c5c156ea&return_id=3071c162-dcd9-414b-a39d-ac3165f29453...).
    'returnState' => array('returnState_example'), // string[] | Return state for filtering. This parameter can be supplied multiple times (return_state=WAITING_ACCEPTANCE&return_state=IN_PROGRESS...).
    'returnCreationDateFrom' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter returns with a creation date after the given date.
    'returnCreationDateTo' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter returns with a creation date before the given date.
    'returnLastUpdatedFrom' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter returns updated after the given date.
    'returnLastUpdatedTo' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter returns updated before the given date.
    'orderCommercialId' => array('orderCommercialId_example'), // string[] | Order commercial id for filtering. This parameter can be supplied multiple times (order_commercial_id=OR01-A&order_commercial_id=OR02-A...).
    'orderLineId' => array('orderLineId_example'), // string[] | Order line id for filtering. This parameter can be supplied multiple times (order_line_id=OR01-A-1&order_line_id=OR02-A-1...).
    'returnRma' => array('returnRma_example'), // string[] | Return RMA for filtering. This parameter can be supplied multiple times (return_rma=RMA-1&return_rma=RMA-2...).
    'customerId' => array('customerId_example'), // string[] | Customer id for filtering. This parameter can be supplied multiple times (customer_id=id1&customer_id=id2...).
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'pageToken' => 'pageToken_example', // string | Token retrieved from next_page_token or previous_page_token to get to next
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->rT11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->rT11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **returnId** | [**string[]**](../Model/string.md)| Return id for filtering. This parameter can be supplied multiple times (return_id&#x3D;58fd00d1-4ea4-453e-9a56-ec28c5c156ea&amp;return_id&#x3D;3071c162-dcd9-414b-a39d-ac3165f29453...). | [optional] |
| **returnState** | [**string[]**](../Model/string.md)| Return state for filtering. This parameter can be supplied multiple times (return_state&#x3D;WAITING_ACCEPTANCE&amp;return_state&#x3D;IN_PROGRESS...). | [optional] |
| **returnCreationDateFrom** | **\DateTime**| Filter returns with a creation date after the given date. | [optional] |
| **returnCreationDateTo** | **\DateTime**| Filter returns with a creation date before the given date. | [optional] |
| **returnLastUpdatedFrom** | **\DateTime**| Filter returns updated after the given date. | [optional] |
| **returnLastUpdatedTo** | **\DateTime**| Filter returns updated before the given date. | [optional] |
| **orderCommercialId** | [**string[]**](../Model/string.md)| Order commercial id for filtering. This parameter can be supplied multiple times (order_commercial_id&#x3D;OR01-A&amp;order_commercial_id&#x3D;OR02-A...). | [optional] |
| **orderLineId** | [**string[]**](../Model/string.md)| Order line id for filtering. This parameter can be supplied multiple times (order_line_id&#x3D;OR01-A-1&amp;order_line_id&#x3D;OR02-A-1...). | [optional] |
| **returnRma** | [**string[]**](../Model/string.md)| Return RMA for filtering. This parameter can be supplied multiple times (return_rma&#x3D;RMA-1&amp;return_rma&#x3D;RMA-2...). | [optional] |
| **customerId** | [**string[]**](../Model/string.md)| Customer id for filtering. This parameter can be supplied multiple times (customer_id&#x3D;id1&amp;customer_id&#x3D;id2...). | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **pageToken** | **string**| Token retrieved from next_page_token or previous_page_token to get to next | [optional] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\RT11Response200**](../Model/RT11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rT21()`

```php
rT21($shopId, $rT21Request): \OpenAPI\Client\Mirakl\Model\RT21Response200
```

Accept or refuse a return request

Limited to 100 returns at a time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'rT21Request' => new \OpenAPI\Client\Mirakl\Model\RT21Request(), // \OpenAPI\Client\Mirakl\Model\RT21Request
];

try {
    $result = $apiInstance->rT21($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->rT21: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **rT21Request** | [**\OpenAPI\Client\Mirakl\Model\RT21Request**](../Model/RT21Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\RT21Response200**](../Model/RT21Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rT25()`

```php
rT25($shopId, $rT25Request): \OpenAPI\Client\Mirakl\Model\RT25Response200
```

Validate returns as received

Limited to 100 returns at a time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'rT25Request' => new \OpenAPI\Client\Mirakl\Model\RT25Request(), // \OpenAPI\Client\Mirakl\Model\RT25Request
];

try {
    $result = $apiInstance->rT25($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->rT25: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **rT25Request** | [**\OpenAPI\Client\Mirakl\Model\RT25Request**](../Model/RT25Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\RT25Response200**](../Model/RT25Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rT26()`

```php
rT26($shopId, $rT26Request): \OpenAPI\Client\Mirakl\Model\RT26Response200
```

Mark a return as compliant or non compliant

Limited to 100 returns at a time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'rT26Request' => new \OpenAPI\Client\Mirakl\Model\RT26Request(), // \OpenAPI\Client\Mirakl\Model\RT26Request
];

try {
    $result = $apiInstance->rT26($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->rT26: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **rT26Request** | [**\OpenAPI\Client\Mirakl\Model\RT26Request**](../Model/RT26Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\RT26Response200**](../Model/RT26Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
