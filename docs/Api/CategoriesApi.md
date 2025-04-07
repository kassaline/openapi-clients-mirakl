# OpenAPI\Client\Mirakl\CategoriesApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**decideCategory()**](CategoriesApi.md#decideCategory) | **POST** /categories/decide | Guess categories |
| [**getCategoriesList()**](CategoriesApi.md#getCategoriesList) | **GET** /categories | Get category list by search term |
| [**getCategory()**](CategoriesApi.md#getCategory) | **GET** /categories/{id_category} | Get category by ID |
| [**getCategoryTree()**](CategoriesApi.md#getCategoryTree) | **GET** /categories/tree | Get complete category tree |


## `decideCategory()`

```php
decideCategory($storefront, $categoryDecideRequestBody, $locale): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseCategory
```

Guess categories

Guess potential categories for a product based on its product data. The first result is the category the product is most likely in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$categoryDecideRequestBody = {"item":{"title":"Trixie Kratzbaum Palamos 109 cm anthrazit, 43787","description":"Kratzbaum \"Palamos\" Kratzbäume  • Für Katzen jeden Alters geeignet • Mit Plüsch-Bezug • Stämme mit Natursisal umwickelt • Schützen Möbel und Teppiche vor den natürlichen Kratzgewohnheiten der Katzen  • H: 109 cm • 1 Bodenplatte, 39 x 39 cm • 5 Stämme, Ø: 9 cm, 1x 10 cm, 2x 32 cm , 2x 39 cm • 1 Höhle mit Plüscheinlage, 35 x 35 x 24 cm • 3 Liegeplatten, 1x 39 x 39 cm, 2x 29 x 29 cm • Mit Spielzeug am Gummiband • Anthrazit Kratzbäume- Für Katzen jeden Alters geeignet - Mit Plüsch-Bezug - Stämme mit Natursisal umwickelt - Schützen Möbel und Teppiche vor den natürlichen Kratzgewohnheiten der Katzen- H: 109 cm - 1 Bodenplatte, 39 x 39 cm - 5 Stämme, Ø: 9 cm, 1 x 10 cm, 2 x 32 cm , 2 x 39 cm - 1 Höhle mit Plüscheinlage, 35 x 35 x 24 cm - 3 Liegeplatten, 1 x 39 x 39 cm, 2 x 29 x 29 cm - Mit Spielzeug am Gummiband - Anthrazit","manufacturer":"Trixie Heimtierbedarf"},"price":5280}; // \OpenAPI\Client\Mirakl\Model\CategoryDecideRequestBody | Json object with product data
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->decideCategory($storefront, $categoryDecideRequestBody, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->decideCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **categoryDecideRequestBody** | [**\OpenAPI\Client\Mirakl\Model\CategoryDecideRequestBody**](../Model/CategoryDecideRequestBody.md)| Json object with product data | |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseCategory**](../Model/CollectionApiResponseCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesList()`

```php
getCategoriesList($storefront, $q, $idParent, $limit, $offset, $locale): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseCategory
```

Get category list by search term

Get a list of categories that contain a specific search term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$q = Buch; // string | Search term for finding a specific category
$idParent = 56; // int | ID of parent category
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getCategoriesList($storefront, $q, $idParent, $limit, $offset, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **q** | **string**| Search term for finding a specific category | [optional] |
| **idParent** | **int**| ID of parent category | [optional] |
| **limit** | **int**| Desired size of result set. Max: 100 | [optional] |
| **offset** | **int**| Offset applied to result set | [optional] |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseCategory**](../Model/CollectionApiResponseCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategory()`

```php
getCategory($idCategory, $storefront, $embedded, $locale): \OpenAPI\Client\Mirakl\Model\ApiResponseCategoryWithEmbedded
```

Get category by ID

Get a category by <code>id_category</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idCategory = 11; // int | The ID of the desired category
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\CategoryEmbeddable()); // \OpenAPI\Client\Mirakl\Model\CategoryEmbeddable[] | Include other entities in the results of the result list
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getCategory($idCategory, $storefront, $embedded, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategory** | **int**| The ID of the desired category | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\CategoryEmbeddable[]**](../Model/\OpenAPI\Client\Mirakl\Model\CategoryEmbeddable.md)| Include other entities in the results of the result list | [optional] |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseCategoryWithEmbedded**](../Model/ApiResponseCategoryWithEmbedded.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryTree()`

```php
getCategoryTree($storefront, $locale): \OpenAPI\Client\Mirakl\Model\ApiResponseCategoryTree
```

Get complete category tree

Get a complete category tree with all categories and their relationships, fields and values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Specifies the store by country
$locale = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\ProductDataLocale(); // \OpenAPI\Client\Mirakl\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getCategoryTree($storefront, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Specifies the store by country | |
| **locale** | [**\OpenAPI\Client\Mirakl\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseCategoryTree**](../Model/ApiResponseCategoryTree.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
