# OpenAPI\Client\Mirakl\MessagesApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**m10()**](MessagesApi.md#m10) | **GET** /api/inbox/threads/{thread_id} | Retrieve a thread |
| [**m11()**](MessagesApi.md#m11) | **GET** /api/inbox/threads | List all threads |
| [**m13()**](MessagesApi.md#m13) | **GET** /api/inbox/threads/{attachment_id}/download | Download an attachment |


## `m10()`

```php
m10($threadId, $shopId): \OpenAPI\Client\Mirakl\Model\M10Response200
```

Retrieve a thread



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'threadId' => 'threadId_example', // string | The identifier of the thread to retrieve.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->m10($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->m10: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **threadId** | **string**| The identifier of the thread to retrieve. | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\M10Response200**](../Model/M10Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `m11()`

```php
m11($entityType, $entityId, $updatedSince, $withMessages, $channelCodes, $shopId, $pageToken, $sort): \OpenAPI\Client\Mirakl\Model\M11Response200
```

List all threads

You may want to retrieve the threads linked to a specific entity, using both <code>entity_type</code> and <code>entity_id</code>. <br>For example, to retrieve threads for an order, use <code>entity_type=MMP_ORDER&entity_id=my-order-1</code>. <br> Available values for <code>entity_type</code> are: <ul> <li><code>MMP_ORDER</code>: for threads on product orders</li> <li><code>MMP_OFFER</code>: for threads on offers</li> <li><code>MPS_ORDER</code>: for threads on service orders</li> <li><code>MPS_SERVICE</code>: for threads on services</li> <li><code>SELLER_OPERATOR</code>: for threads between sellers and operator</li> </ul>  This resource uses seek pagination. The default value for parameter <code>limit</code> is 50.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'entityType' => 'entityType_example', // string | Entity type to include in result (default: include all).<br/> Available values: MMP_ORDER, MMP_OFFER, MPS_ORDER, MPS_SERVICE, SELLER_OPERATOR
    'entityId' => array('entityId_example'), // string[] | Comma separated list of Entity id to include in result (default: include all).<br/> The entity_type must be specified to use this filter, otherwise an error 400 will be returned.<br/> Example of an entity_id query: entity_id=order1-A,order20-A,order13-A&entity_type=MMP_ORDER
    'updatedSince' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Retrieve threads modified at or after this date.
    'withMessages' => false, // bool | True to include message details. Limited to the last 100 messages received on each thread.
    'channelCodes' => array('channelCodes_example'), // string[] | List of the channel codes to filter with, using a comma (,) as a separator. <br/> If specified, only order messages linked to the given channels will be returned (Whatever the value of <code>entity_type</code>). <br/> Otherwise, messages will be returned regardless of their channels.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'pageToken' => 'pageToken_example', // string | Token retrieved from next_page_token or previous_page_token to get to next
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->m11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->m11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entityType** | **string**| Entity type to include in result (default: include all).&lt;br/&gt; Available values: MMP_ORDER, MMP_OFFER, MPS_ORDER, MPS_SERVICE, SELLER_OPERATOR | [optional] |
| **entityId** | [**string[]**](../Model/string.md)| Comma separated list of Entity id to include in result (default: include all).&lt;br/&gt; The entity_type must be specified to use this filter, otherwise an error 400 will be returned.&lt;br/&gt; Example of an entity_id query: entity_id&#x3D;order1-A,order20-A,order13-A&amp;entity_type&#x3D;MMP_ORDER | [optional] |
| **updatedSince** | **\DateTime**| Retrieve threads modified at or after this date. | [optional] |
| **withMessages** | **bool**| True to include message details. Limited to the last 100 messages received on each thread. | [optional] [default to false] |
| **channelCodes** | [**string[]**](../Model/string.md)| List of the channel codes to filter with, using a comma (,) as a separator. &lt;br/&gt; If specified, only order messages linked to the given channels will be returned (Whatever the value of &lt;code&gt;entity_type&lt;/code&gt;). &lt;br/&gt; Otherwise, messages will be returned regardless of their channels. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **pageToken** | **string**| Token retrieved from next_page_token or previous_page_token to get to next | [optional] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\M11Response200**](../Model/M11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `m13()`

```php
m13($attachmentId, $shopId): \SplFileObject
```

Download an attachment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'attachmentId' => 'attachmentId_example', // string | The identifier of the attachment to retrieve.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->m13($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->m13: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachmentId** | **string**| The identifier of the attachment to retrieve. | |
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
