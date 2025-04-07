# OpenAPI\Client\Mirakl\ReturnUnitsApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptReturnUnit()**](ReturnUnitsApi.md#acceptReturnUnit) | **PATCH** /return-units/{id_return_unit}/accept | Accept a return unit |
| [**clarifyReturnUnit()**](ReturnUnitsApi.md#clarifyReturnUnit) | **PATCH** /return-units/{id_return_unit}/clarify | Clarify a return unit |
| [**getReturnUnit()**](ReturnUnitsApi.md#getReturnUnit) | **GET** /return-units/{id_return_unit} | Get a return unit by ID |
| [**getReturnUnits()**](ReturnUnitsApi.md#getReturnUnits) | **GET** /return-units | Get a list of return units |
| [**rejectReturnUnit()**](ReturnUnitsApi.md#rejectReturnUnit) | **PATCH** /return-units/{id_return_unit}/reject | Reject a return unit |
| [**repairReturnUnit()**](ReturnUnitsApi.md#repairReturnUnit) | **PATCH** /return-units/{id_return_unit}/repair | Repair a return unit |


## `acceptReturnUnit()`

```php
acceptReturnUnit($idReturnUnit)
```

Accept a return unit

Mark a return unit as `return_accepted`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idReturnUnit = 7896580917; // int | Return unit ID, unique across all return units

try {
    $apiInstance->acceptReturnUnit($idReturnUnit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->acceptReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idReturnUnit** | **int**| Return unit ID, unique across all return units | |

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

## `clarifyReturnUnit()`

```php
clarifyReturnUnit($idReturnUnit, $returnUnitClarifyRequest)
```

Clarify a return unit

Mark a return unit as `return_in_clarification` to indicate a problem with a return unit after it has been received. Will open a ticket addressing the customer with the given message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idReturnUnit = 7896580917; // int | Return unit ID, unique across all return units
$returnUnitClarifyRequest = {"message":"needs clarification"}; // \OpenAPI\Client\Mirakl\Model\ReturnUnitClarifyRequest | Request body containing message for clarifying return unit

try {
    $apiInstance->clarifyReturnUnit($idReturnUnit, $returnUnitClarifyRequest);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->clarifyReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idReturnUnit** | **int**| Return unit ID, unique across all return units | |
| **returnUnitClarifyRequest** | [**\OpenAPI\Client\Mirakl\Model\ReturnUnitClarifyRequest**](../Model/ReturnUnitClarifyRequest.md)| Request body containing message for clarifying return unit | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnUnit()`

```php
getReturnUnit($idReturnUnit, $embedded): \OpenAPI\Client\Mirakl\Model\ApiResponseReturnUnitDetails
```

Get a return unit by ID

Get a return unit by <code>id_return_unit</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idReturnUnit = 7896580917; // int | Return unit ID, unique across all return units
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ReturnUnitEmbeddable()); // \OpenAPI\Client\Mirakl\Model\ReturnUnitEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getReturnUnit($idReturnUnit, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->getReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idReturnUnit** | **int**| Return unit ID, unique across all return units | |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\ReturnUnitEmbeddable[]**](../Model/\OpenAPI\Client\Mirakl\Model\ReturnUnitEmbeddable.md)| Additional data to be returned | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseReturnUnitDetails**](../Model/ApiResponseReturnUnitDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnUnits()`

```php
getReturnUnits($storefront, $tsCreatedFromIso, $status, $fulfillmentType, $sort, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseReturnUnit
```

Get a list of return units

Get a list of return units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Locale of storefront
$tsCreatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get only return units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$status = [return_arrived]; // \OpenAPI\Client\Mirakl\Model\ReturnUnitStatus[] | Get only return units which are in the given status
$fulfillmentType = [fulfilled_by_merchant]; // \OpenAPI\Client\Mirakl\Model\FulfillmentType[] | Get only return units which are fulfilled by the given type.<br/> The value `fulfilled_by_kaufland` is **DEPRECATED**.
$sort = ts_created:desc; // string | Specify sorting
$limit = 56; // int | Desired size of result set<br>max: 100, default: 30
$offset = 56; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getReturnUnits($storefront, $tsCreatedFromIso, $status, $fulfillmentType, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->getReturnUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Locale of storefront | [optional] |
| **tsCreatedFromIso** | **\DateTime**| Get only return units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional] |
| **status** | [**\OpenAPI\Client\Mirakl\Model\ReturnUnitStatus[]**](../Model/\OpenAPI\Client\Mirakl\Model\ReturnUnitStatus.md)| Get only return units which are in the given status | [optional] |
| **fulfillmentType** | [**\OpenAPI\Client\Mirakl\Model\FulfillmentType[]**](../Model/\OpenAPI\Client\Mirakl\Model\FulfillmentType.md)| Get only return units which are fulfilled by the given type.&lt;br/&gt; The value &#x60;fulfilled_by_kaufland&#x60; is **DEPRECATED**. | [optional] |
| **sort** | **string**| Specify sorting | [optional] [default to &#39;ts_created:desc&#39;] |
| **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] |
| **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseReturnUnit**](../Model/CollectionApiResponseReturnUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectReturnUnit()`

```php
rejectReturnUnit($idReturnUnit, $returnUnitRejectRequest)
```

Reject a return unit

Mark a return unit as `return_rejected`. Will open a ticket addressing the customer with the given message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idReturnUnit = 7896580917; // int | Return unit ID, unique across all return units
$returnUnitRejectRequest = {"message":"Can not be returned"}; // \OpenAPI\Client\Mirakl\Model\ReturnUnitRejectRequest | Request body containing message for rejecting return unit

try {
    $apiInstance->rejectReturnUnit($idReturnUnit, $returnUnitRejectRequest);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->rejectReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idReturnUnit** | **int**| Return unit ID, unique across all return units | |
| **returnUnitRejectRequest** | [**\OpenAPI\Client\Mirakl\Model\ReturnUnitRejectRequest**](../Model/ReturnUnitRejectRequest.md)| Request body containing message for rejecting return unit | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `repairReturnUnit()`

```php
repairReturnUnit($idReturnUnit)
```

Repair a return unit

Mark a return unit as `return_in_repair`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idReturnUnit = 7896580917; // int | Return unit ID, unique across all return units

try {
    $apiInstance->repairReturnUnit($idReturnUnit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->repairReturnUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idReturnUnit** | **int**| Return unit ID, unique across all return units | |

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
