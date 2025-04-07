# OpenAPI\Client\Mirakl\UnitsApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkUpdateUnits()**](UnitsApi.md#bulkUpdateUnits) | **POST** /units/bulk | Update some fields of a given set of units |
| [**createUnit()**](UnitsApi.md#createUnit) | **POST** /units | Add a unit |
| [**deleteUnit()**](UnitsApi.md#deleteUnit) | **DELETE** /units/{id_unit} | Delete a unit |
| [**getUnit()**](UnitsApi.md#getUnit) | **GET** /units/{id_unit} | Get a unit by ID |
| [**getUnits()**](UnitsApi.md#getUnits) | **GET** /units | Get a list of your units |
| [**patchUnit()**](UnitsApi.md#patchUnit) | **PATCH** /units/{id_unit} | Update some of the fields of a unit |


## `bulkUpdateUnits()`

```php
bulkUpdateUnits($storefront, $unitsBulkUpdateRequest): \OpenAPI\Client\Mirakl\Model\UnitsBulkUpdateResponse
```

Update some fields of a given set of units

Update some fields of a given set of units. Please notice that you have to specify a listing price greater than zero.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront
$unitsBulkUpdateRequest = array(new \OpenAPI\Client\Mirakl\Model\UnitsBulkUpdateRequest()); // \OpenAPI\Client\Mirakl\Model\UnitsBulkUpdateRequest[] | Update Object

try {
    $result = $apiInstance->bulkUpdateUnits($storefront, $unitsBulkUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->bulkUpdateUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **unitsBulkUpdateRequest** | [**\OpenAPI\Client\Mirakl\Model\UnitsBulkUpdateRequest[]**](../Model/UnitsBulkUpdateRequest.md)| Update Object | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\UnitsBulkUpdateResponse**](../Model/UnitsBulkUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUnit()`

```php
createUnit($storefront, $unitRequest): \OpenAPI\Client\Mirakl\Model\ApiResponseUnit
```

Add a unit

Add a new unit for an existing product. You must specify either an <code>id_product</code> or an <code>ean</code> (or both), to identify the product to which the unit belongs. Please notice that you have to specify a listing price greater than zero.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront
$unitRequest = new \OpenAPI\Client\Mirakl\Model\UnitRequest(); // \OpenAPI\Client\Mirakl\Model\UnitRequest | Information about the unit that will be generated

try {
    $result = $apiInstance->createUnit($storefront, $unitRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->createUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **unitRequest** | [**\OpenAPI\Client\Mirakl\Model\UnitRequest**](../Model/UnitRequest.md)| Information about the unit that will be generated | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseUnit**](../Model/ApiResponseUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUnit()`

```php
deleteUnit($idUnit, $storefront)
```

Delete a unit

Delete a unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idUnit = 56; // int | Internal ID of Unit, unique across all Units
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront

try {
    $apiInstance->deleteUnit($idUnit, $storefront);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->deleteUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idUnit** | **int**| Internal ID of Unit, unique across all Units | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |

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

## `getUnit()`

```php
getUnit($idUnit, $storefront, $embedded): \OpenAPI\Client\Mirakl\Model\ApiResponseUnit
```

Get a unit by ID

Get a unit by its <code>id_unit</code>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idUnit = 56; // int | Internal ID of Unit, unique across all Units
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\UnitEmbeddedEnum()); // \OpenAPI\Client\Mirakl\Model\UnitEmbeddedEnum[]

try {
    $result = $apiInstance->getUnit($idUnit, $storefront, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idUnit** | **int**| Internal ID of Unit, unique across all Units | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\UnitEmbeddedEnum[]**](../Model/\OpenAPI\Client\Mirakl\Model\UnitEmbeddedEnum.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseUnit**](../Model/ApiResponseUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnits()`

```php
getUnits($storefront, $limit, $offset, $idOffer, $idProduct, $ean, $embedded, $fulfillmentType): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseUnitEmbedded
```

Get a list of your units

Get a list of your units. Note that there may a delay of up to several minutes between adding a new unit and when it will be available through this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront
$limit = 30; // int | Desired size of result set, maximum is 100
$offset = 0; // int | Offset applied to result set
$idOffer = 'idOffer_example'; // string | Provided ID of your stock
$idProduct = 56; // int | Our internal id_product
$ean = 'ean_example'; // string | EAN, 13 or 14 digits
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\UnitEmbeddedEnum()); // \OpenAPI\Client\Mirakl\Model\UnitEmbeddedEnum[]
$fulfillmentType = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\FulfillmentType()); // \OpenAPI\Client\Mirakl\Model\FulfillmentType[] | Get only units which are fulfilled by the given type. <br/> The value `fulfilled_by_kaufland` is **DEPRECATED**.

try {
    $result = $apiInstance->getUnits($storefront, $limit, $offset, $idOffer, $idProduct, $ean, $embedded, $fulfillmentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **limit** | **int**| Desired size of result set, maximum is 100 | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set | [optional] [default to 0] |
| **idOffer** | **string**| Provided ID of your stock | [optional] |
| **idProduct** | **int**| Our internal id_product | [optional] |
| **ean** | **string**| EAN, 13 or 14 digits | [optional] |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\UnitEmbeddedEnum[]**](../Model/\OpenAPI\Client\Mirakl\Model\UnitEmbeddedEnum.md)|  | [optional] |
| **fulfillmentType** | [**\OpenAPI\Client\Mirakl\Model\FulfillmentType[]**](../Model/\OpenAPI\Client\Mirakl\Model\FulfillmentType.md)| Get only units which are fulfilled by the given type. &lt;br/&gt; The value &#x60;fulfilled_by_kaufland&#x60; is **DEPRECATED**. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseUnitEmbedded**](../Model/CollectionApiResponseUnitEmbedded.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUnit()`

```php
patchUnit($idUnit, $storefront, $unitPatchRequest): \OpenAPI\Client\Mirakl\Model\ApiResponseUnit
```

Update some of the fields of a unit

Update some of the fields of a unit. Please notice that you have to specify a listing price greater than zero.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idUnit = 56; // int | Internal ID of Unit, unique across all Units
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront
$unitPatchRequest = new \OpenAPI\Client\Mirakl\Model\UnitPatchRequest(); // \OpenAPI\Client\Mirakl\Model\UnitPatchRequest | Update Object

try {
    $result = $apiInstance->patchUnit($idUnit, $storefront, $unitPatchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->patchUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idUnit** | **int**| Internal ID of Unit, unique across all Units | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **unitPatchRequest** | [**\OpenAPI\Client\Mirakl\Model\UnitPatchRequest**](../Model/UnitPatchRequest.md)| Update Object | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseUnit**](../Model/ApiResponseUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
