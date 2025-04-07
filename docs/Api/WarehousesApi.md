# OpenAPI\Client\Mirakl\WarehousesApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWarehouse()**](WarehousesApi.md#createWarehouse) | **POST** /warehouses | Create a new Warehouse |
| [**deleteWarehouse()**](WarehousesApi.md#deleteWarehouse) | **DELETE** /warehouses/{id_warehouse} | Delete a warehouse |
| [**getWarehouse()**](WarehousesApi.md#getWarehouse) | **GET** /warehouses/{id_warehouse} | Get a warehouse by its ID |
| [**getWarehouses()**](WarehousesApi.md#getWarehouses) | **GET** /warehouses | Get a list of your Warehouses |
| [**updateWarehouse()**](WarehousesApi.md#updateWarehouse) | **PUT** /warehouses/{id_warehouse} | Update a Warehouse |


## `createWarehouse()`

```php
createWarehouse($warehouseBodyRequest): \OpenAPI\Client\Mirakl\Model\ApiResponseWarehouse
```

Create a new Warehouse

Create a new warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$warehouseBodyRequest = new \OpenAPI\Client\Mirakl\Model\WarehouseBodyRequest(); // \OpenAPI\Client\Mirakl\Model\WarehouseBodyRequest | Information about the warehouse that will be generated

try {
    $result = $apiInstance->createWarehouse($warehouseBodyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->createWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouseBodyRequest** | [**\OpenAPI\Client\Mirakl\Model\WarehouseBodyRequest**](../Model/WarehouseBodyRequest.md)| Information about the warehouse that will be generated | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseWarehouse**](../Model/ApiResponseWarehouse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWarehouse()`

```php
deleteWarehouse($idWarehouse)
```

Delete a warehouse

Delete a warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idWarehouse = 56; // int | Internal ID of Warehouse, unique across all Warehouses

try {
    $apiInstance->deleteWarehouse($idWarehouse);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->deleteWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idWarehouse** | **int**| Internal ID of Warehouse, unique across all Warehouses | |

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

## `getWarehouse()`

```php
getWarehouse($idWarehouse): \OpenAPI\Client\Mirakl\Model\ApiResponseWarehouse
```

Get a warehouse by its ID

Gets a warehouse by <code>id_warehouse</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idWarehouse = 56; // int | Internal ID of Warehouse, unique across all Warehouses

try {
    $result = $apiInstance->getWarehouse($idWarehouse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idWarehouse** | **int**| Internal ID of Warehouse, unique across all Warehouses | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseWarehouse**](../Model/ApiResponseWarehouse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouses()`

```php
getWarehouses($limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseWarehouse
```

Get a list of your Warehouses

Get a list of your warehouses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getWarehouses($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Desired size of result set | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseWarehouse**](../Model/CollectionApiResponseWarehouse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWarehouse()`

```php
updateWarehouse($idWarehouse, $warehouseBodyRequest): \OpenAPI\Client\Mirakl\Model\ApiResponseWarehouse
```

Update a Warehouse

Update a warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idWarehouse = 56; // int | Internal ID of Warehouse, unique across all Warehouses
$warehouseBodyRequest = new \OpenAPI\Client\Mirakl\Model\WarehouseBodyRequest(); // \OpenAPI\Client\Mirakl\Model\WarehouseBodyRequest | Update Object

try {
    $result = $apiInstance->updateWarehouse($idWarehouse, $warehouseBodyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->updateWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idWarehouse** | **int**| Internal ID of Warehouse, unique across all Warehouses | |
| **warehouseBodyRequest** | [**\OpenAPI\Client\Mirakl\Model\WarehouseBodyRequest**](../Model/WarehouseBodyRequest.md)| Update Object | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseWarehouse**](../Model/ApiResponseWarehouse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
