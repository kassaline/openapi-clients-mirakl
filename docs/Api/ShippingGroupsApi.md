# OpenAPI\Client\Mirakl\ShippingGroupsApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getShippingGroup()**](ShippingGroupsApi.md#getShippingGroup) | **GET** /shipping-groups/{id_shipping_group} | Get a shipping group by ID |
| [**getShippingGroups()**](ShippingGroupsApi.md#getShippingGroups) | **GET** /shipping-groups | Get the list of your predefined shipping groups |


## `getShippingGroup()`

```php
getShippingGroup($idShippingGroup, $storefront): \OpenAPI\Client\Mirakl\Model\ApiResponseShippingGroup
```

Get a shipping group by ID

Get a shipping group by <code>id_shipping_group</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ShippingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idShippingGroup = 56; // int
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->getShippingGroup($idShippingGroup, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingGroupsApi->getShippingGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idShippingGroup** | **int**|  | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseShippingGroup**](../Model/ApiResponseShippingGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingGroups()`

```php
getShippingGroups($storefront, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseShippingGroup
```

Get the list of your predefined shipping groups

Get the list of your predefined shipping groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ShippingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getShippingGroups($storefront, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingGroupsApi->getShippingGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **limit** | **int**| Desired size of result set | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseShippingGroup**](../Model/CollectionApiResponseShippingGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
