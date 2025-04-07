# OpenAPI\Client\Mirakl\AttributesApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAttribute()**](AttributesApi.md#getAttribute) | **GET** /attributes/{id_attribute} | Get attribute by ID |
| [**getAttributeByName()**](AttributesApi.md#getAttributeByName) | **GET** /attributes/by-name/{name} | Get attribute by name |
| [**getAttributeList()**](AttributesApi.md#getAttributeList) | **GET** /attributes | Get an attribute list |
| [**getAttributeListBySearch()**](AttributesApi.md#getAttributeListBySearch) | **GET** /attributes/search | Get attributes by search term |
| [**getSharedSetCsvFileByAttributeId()**](AttributesApi.md#getSharedSetCsvFileByAttributeId) | **GET** /attributes/{id_attribute}/shared-set-values | Get the URL of a CSV file containing the shared set values for a specific attribute ID |
| [**getSharedSetListBySearchAndAttributeId()**](AttributesApi.md#getSharedSetListBySearchAndAttributeId) | **GET** /attributes/{id_attribute}/shared-set | Get shared-set by search term and attribute id |


## `getAttribute()`

```php
getAttribute($idAttribute, $storefront, $locale): \OpenAPI\Client\Mirakl\Model\ApiResponseAttribute
```

Get attribute by ID

Get an attribute by <code>id_attribute</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idAttribute = 21; // int | The ID of the attribute
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttribute($idAttribute, $storefront, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idAttribute** | **int**| The ID of the attribute | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseAttribute**](../Model/ApiResponseAttribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributeByName()`

```php
getAttributeByName($name, $storefront, $locale): \OpenAPI\Client\Mirakl\Model\ApiResponseAttribute
```

Get attribute by name

Get an attribute by its name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = colour; // string | The name of the attribute
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttributeByName($name, $storefront, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the attribute | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseAttribute**](../Model/ApiResponseAttribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributeList()`

```php
getAttributeList($storefront, $limit, $offset, $locale): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseAttribute
```

Get an attribute list

Get a list of all available attributes for a specific language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttributeList($storefront, $limit, $offset, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **limit** | **int**| Desired size of result set. Max: 100 | [optional] |
| **offset** | **int**| Offset applied to result set | [optional] |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseAttribute**](../Model/CollectionApiResponseAttribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributeListBySearch()`

```php
getAttributeListBySearch($storefront, $q, $limit, $offset, $locale): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseAttribute
```

Get attributes by search term

Get a list of attributes by a search term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$q = colour; // string | Search term for finding a specific attribute
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttributeListBySearch($storefront, $q, $limit, $offset, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeListBySearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **q** | **string**| Search term for finding a specific attribute | |
| **limit** | **int**| Desired size of result set. Max: 100 | [optional] |
| **offset** | **int**| Offset applied to result set | [optional] |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseAttribute**](../Model/CollectionApiResponseAttribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSharedSetCsvFileByAttributeId()`

```php
getSharedSetCsvFileByAttributeId($idAttribute, $locale): \OpenAPI\Client\Mirakl\Model\ApiResponseString
```

Get the URL of a CSV file containing the shared set values for a specific attribute ID

Get the URL for a CSV file containing the shared set values for a specific attribute ID. This endpoint returns a signed URL that provides access to the CSV file, which includes all the shared set values associated with the specified attribute. The signed URL is valid for six days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idAttribute = 351; // int | The ID of the attribute
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getSharedSetCsvFileByAttributeId($idAttribute, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getSharedSetCsvFileByAttributeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idAttribute** | **int**| The ID of the attribute | |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseString**](../Model/ApiResponseString.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSharedSetListBySearchAndAttributeId()`

```php
getSharedSetListBySearchAndAttributeId($idAttribute, $locale, $q, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseSharedSet
```

Get shared-set by search term and attribute id

Get a list of shared-set for a given attribute id by a search term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idAttribute = 351; // int | The ID of the attribute
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale
$q = Braun; // string | Search term for finding a specific shared set value
$limit = 30; // int | Desired size of result set. Max: 100
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getSharedSetListBySearchAndAttributeId($idAttribute, $locale, $q, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getSharedSetListBySearchAndAttributeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idAttribute** | **int**| The ID of the attribute | |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | |
| **q** | **string**| Search term for finding a specific shared set value | [optional] |
| **limit** | **int**| Desired size of result set. Max: 100 | [optional] |
| **offset** | **int**| Offset applied to result set | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseSharedSet**](../Model/CollectionApiResponseSharedSet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
