# OpenAPI\Client\Mirakl\PicklistsApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pL11()**](PicklistsApi.md#pL11) | **GET** /api/picklists | List picklists |


## `pL11()`

```php
pL11($pickrunCode, $pickupDateMin, $pickupDateMax, $picklistId, $picklistState, $orderLineId, $shopId, $pageToken, $sort): \OpenAPI\Client\Mirakl\Model\PL11Response200
```

List picklists



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PicklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'pickrunCode' => 'pickrunCode_example', // string | Pick run code for filtering.
    'pickupDateMin' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter picklists with a pick-up date after the given date.
    'pickupDateMax' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter picklists with a pick-up date before the given date.
    'picklistId' => array('picklistId_example'), // string[] | Picklist id for filtering. This parameter can be supplied multiple times (picklist_id=OR01-A&picklist_id=OR02-A...).
    'picklistState' => array('picklistState_example'), // string[] | Picklist state for filtering. This parameter can be supplied multiple times (picklist_state=WAITING_PREPARATION&picklist_state=IN_PREPARATION...).
    'orderLineId' => array('orderLineId_example'), // string[] | Order line id for filtering. This parameter can be supplied multiple times (order_line_id=OR01-A-1&order_line_id=OR02-A-1...).
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'pageToken' => 'pageToken_example', // string | Token retrieved from next_page_token or previous_page_token to get to next
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->pL11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PicklistsApi->pL11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pickrunCode** | **string**| Pick run code for filtering. | [optional] |
| **pickupDateMin** | **\DateTime**| Filter picklists with a pick-up date after the given date. | [optional] |
| **pickupDateMax** | **\DateTime**| Filter picklists with a pick-up date before the given date. | [optional] |
| **picklistId** | [**string[]**](../Model/string.md)| Picklist id for filtering. This parameter can be supplied multiple times (picklist_id&#x3D;OR01-A&amp;picklist_id&#x3D;OR02-A...). | [optional] |
| **picklistState** | [**string[]**](../Model/string.md)| Picklist state for filtering. This parameter can be supplied multiple times (picklist_state&#x3D;WAITING_PREPARATION&amp;picklist_state&#x3D;IN_PREPARATION...). | [optional] |
| **orderLineId** | [**string[]**](../Model/string.md)| Order line id for filtering. This parameter can be supplied multiple times (order_line_id&#x3D;OR01-A-1&amp;order_line_id&#x3D;OR02-A-1...). | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **pageToken** | **string**| Token retrieved from next_page_token or previous_page_token to get to next | [optional] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\PL11Response200**](../Model/PL11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
