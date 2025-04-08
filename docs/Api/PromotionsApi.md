# OpenAPI\Client\Mirakl\PromotionsApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pR01()**](PromotionsApi.md#pR01) | **GET** /api/promotions | List promotions |


## `pR01()`

```php
pR01($ids, $types, $states, $endingAfter, $startingBefore, $dateCreatedFrom, $dateCreatedTo, $lastRequestDate, $locale, $triggerOfferIds, $rewardOfferIds, $channelCodes, $shopId, $max, $offset, $sort, $order): \OpenAPI\Client\Mirakl\Model\PR01Response200
```

List promotions



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'ids' => 'ids_example', // string | A comma separated list of identifiers for a promotion
    'types' => 'types_example', // string | A comma separated list of types for a promotion [AMOUNT_OFF|FREE_ITEMS|PERCENTAGE_OFF]
    'states' => 'ACTIVE', // string | A comma separated list of states for a promotion [PENDING|ACTIVE|EXPIRED|PENDING_APPROVAL|REJECTED|ALL]
    'endingAfter' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Returns promotions which ended or will end after this date
    'startingBefore' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Returns promotions which started or will start before this date
    'dateCreatedFrom' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter promotion creation date lower limit
    'dateCreatedTo' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Filter promotion creation date upper limit
    'lastRequestDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Last request date and time. We recommend using the differential mode along with the <code>states</code> parameter.
    'locale' => 'locale_example', // string | The locale to filter the medias and the public descriptions with. If not specified, medias and public descriptions of all locales are returned.If specified, only the media and the public description matching the locale will be returned, or, if not exist, the one matching the platform default locale.
    'triggerOfferIds' => 'triggerOfferIds_example', // string | Promotion-triggering offer ids, separated by commas
    'rewardOfferIds' => 'rewardOfferIds_example', // string | Promotion reward offer ids, separated by commas
    'channelCodes' => 'channelCodes_example', // string | Channel codes on which promotions apply, separated by commas
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'max' => 56, // int | Maximum number of items returned per page
    'offset' => 56, // int | Index of the first item (among all the results) in the returned page
    'sort' => 'sort_example', // string | How the results should be sorted
    'order' => 'order_example', // string | Sort direction
];

try {
    $result = $apiInstance->pR01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->pR01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | **string**| A comma separated list of identifiers for a promotion | [optional] |
| **types** | **string**| A comma separated list of types for a promotion [AMOUNT_OFF|FREE_ITEMS|PERCENTAGE_OFF] | [optional] |
| **states** | **string**| A comma separated list of states for a promotion [PENDING|ACTIVE|EXPIRED|PENDING_APPROVAL|REJECTED|ALL] | [optional] [default to &#39;ACTIVE&#39;] |
| **endingAfter** | **\DateTime**| Returns promotions which ended or will end after this date | [optional] |
| **startingBefore** | **\DateTime**| Returns promotions which started or will start before this date | [optional] |
| **dateCreatedFrom** | **\DateTime**| Filter promotion creation date lower limit | [optional] |
| **dateCreatedTo** | **\DateTime**| Filter promotion creation date upper limit | [optional] |
| **lastRequestDate** | **\DateTime**| Last request date and time. We recommend using the differential mode along with the &lt;code&gt;states&lt;/code&gt; parameter. | [optional] |
| **locale** | **string**| The locale to filter the medias and the public descriptions with. If not specified, medias and public descriptions of all locales are returned.If specified, only the media and the public description matching the locale will be returned, or, if not exist, the one matching the platform default locale. | [optional] |
| **triggerOfferIds** | **string**| Promotion-triggering offer ids, separated by commas | [optional] |
| **rewardOfferIds** | **string**| Promotion reward offer ids, separated by commas | [optional] |
| **channelCodes** | **string**| Channel codes on which promotions apply, separated by commas | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **max** | **int**| Maximum number of items returned per page | [optional] |
| **offset** | **int**| Index of the first item (among all the results) in the returned page | [optional] |
| **sort** | **string**| How the results should be sorted | [optional] |
| **order** | **string**| Sort direction | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\PR01Response200**](../Model/PR01Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
