# OpenAPI\Client\Mirakl\BuyboxApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOffersRankings()**](BuyboxApi.md#getOffersRankings) | **GET** /buybox | Get a list of offers rankings for a product |


## `getOffersRankings()`

```php
getOffersRankings($idProduct, $storefront, $condition, $limit): \OpenAPI\Client\Mirakl\Model\ApiResponseOffersRankings
```

Get a list of offers rankings for a product

This endpoint retrieves the top-ranked offers for a specified product, with an optional limit parameter to specify the maximum number of offers (up to 10).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\BuyboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idProduct = 56; // int | Our internal id_product
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront
$condition = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\BuyboxCondition(); // \OpenAPI\Client\Mirakl\Model\BuyboxCondition | The condition of the offers
$limit = 10; // int | Desired size of offsets set, maximum is 10

try {
    $result = $apiInstance->getOffersRankings($idProduct, $storefront, $condition, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyboxApi->getOffersRankings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduct** | **int**| Our internal id_product | |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **condition** | [**\OpenAPI\Client\Mirakl\Model\BuyboxCondition**](../Model/.md)| The condition of the offers | |
| **limit** | **int**| Desired size of offsets set, maximum is 10 | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseOffersRankings**](../Model/ApiResponseOffersRankings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
