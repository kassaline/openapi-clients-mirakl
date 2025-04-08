# OpenAPI\Client\Mirakl\OffersApi

All URIs are relative to https://your-instance.mirakl.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oF01()**](OffersApi.md#oF01) | **POST** /api/offers/imports | Import a file to add offers |
| [**oF02()**](OffersApi.md#oF02) | **GET** /api/offers/imports/{import} | Get information and statistics about an offer import |
| [**oF03()**](OffersApi.md#oF03) | **GET** /api/offers/imports/{import}/error_report | Get the error report file for an offer import |
| [**oF04()**](OffersApi.md#oF04) | **GET** /api/offers/imports | Get information and statistics about offer imports |
| [**oF21()**](OffersApi.md#oF21) | **GET** /api/offers | List offers of a shop |
| [**oF22()**](OffersApi.md#oF22) | **GET** /api/offers/{offer} | Get information about an offer |
| [**oF24()**](OffersApi.md#oF24) | **POST** /api/offers | Create, update, or delete offers |
| [**oF51()**](OffersApi.md#oF51) | **GET** /api/offers/export | Get offers CSV file |
| [**oF52()**](OffersApi.md#oF52) | **POST** /api/offers/export/async | Export offers CSV or JSON file asynchronously |
| [**oF53()**](OffersApi.md#oF53) | **GET** /api/offers/export/async/status/{tracking_id} | Poll the status of an asynchronous offer export (OF52) |
| [**p11()**](OffersApi.md#p11) | **GET** /api/products/offers | List offers for each given product |
| [**pRI01()**](OffersApi.md#pRI01) | **POST** /api/offers/pricing/imports | Import a price file |
| [**pRI02()**](OffersApi.md#pRI02) | **GET** /api/offers/pricing/imports | Get information and statistics about an offer pricing import |
| [**pRI03()**](OffersApi.md#pRI03) | **GET** /api/offers/pricing/imports/{import_id}/error_report | Get the error report for a price import in CSV format |


## `oF01()`

```php
oF01($shopId, $file, $importMode, $operatorFormat, $withProducts): \OpenAPI\Client\Mirakl\Model\OF01Response201
```

Import a file to add offers

Returns the import identifier to track the status of the import.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'file' => '/path/to/file.txt', // \SplFileObject | Import file (CSV or XML or XLSX) to upload. Use <code>multipart/form-data</code> with name <code>file</code>.<br/> Csv format:<br/><pre>\\\"sku\\\";\\\"product-id\\\";\\\"product-id-type\\\";\\\"description\\\";\\\"internal-description\\\";\\\"price\\\";\\\"price-additional-info\\\";\\\"quantity\\\";\\\"min-quantity-alert\\\";\\\"state\\\";\\\"available-start-date\\\";\\\"available-end-date\\\";\\\"discount-price\\\";\\\"discount-start-date\\\";\\\"discount-end-date\\\";\\\"discount-ranges\\\";\\\"allow-quote-requests\\\";\\\"leadtime-to-ship\\\";\\\"min-order-quantity\\\";\\\"max-order-quantity\\\";\\\"package-quantity\\\";\\\"update-delete\\\";\\\"price-ranges\\\";\\\"ecotax\\\";\\\"gift-wrap\\\";\\\"min-quantity-ordered\\\"</pre><br/>For Dropship offers, do not use <code>discount-ranges</code> and <code>price-ranges</code> as they will be ignored.<br/><br/>If you use specific sales channels, use: <pre>\\\"price[channel=channel code]\\\";\\\"discount-price[channel=channel code]\\\";\\\"discount-start-date[channel=channel code]\\\";\\\"discount-end-date[channel=channel code]\\\";\\\"discount-ranges[channel=channel code]\\\";\\\"price-ranges[channel=channel code]\\\"</pre> For Dropship offers, do not use <code>channel prices</code>, as they will be ignored.<br/><br/>If you use the price per measurement unit feature, use <code>pricing-unit</code> to specify the unit corresponding to the submitted <code>price</code>.<br/><br/>If US Tax options are activated on the platform, use: <code>product-tax-code</code> to facilitate tax calculations.<br/><br/>If <i>Data collection related to circular economy regulations</i> is enabled, use:<br/><pre>\\\"producer-id[EPR category code]\\\"; \\\"eco-contribution-amount[EPR category code]\\\"</pre>EPR category code must be one of: <pre>FR-AGROPACK, FR-ASL, FR-DASRIPAT, FR-DBPS, FR-DDS, FR-DEA, FR-DEEE, FR-DISPMED, FR-DIY, FR-EMBM, FR-GF, FR-JOUETS, FR-LUB, FR-MH, FR-MNU, FR-PA, FR-PAP, FR-PCHIM, FR-PMCB, FR-PNEU, FR-TABAC, FR-TLC, FR-VEHICULE, FR-VHU, DE-BATTG, DE-PACK, DE-WEEE, ES-PACK, ES-GPACK, ES-WEEE</pre><br/>
    'importMode' => 'importMode_example', // string
    'operatorFormat' => false, // bool | Force the use of the operator product format
    'withProducts' => false, // bool | This file also contains product information
];

try {
    $result = $apiInstance->oF01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| Import file (CSV or XML or XLSX) to upload. Use &lt;code&gt;multipart/form-data&lt;/code&gt; with name &lt;code&gt;file&lt;/code&gt;.&lt;br/&gt; Csv format:&lt;br/&gt;&lt;pre&gt;\\\&quot;sku\\\&quot;;\\\&quot;product-id\\\&quot;;\\\&quot;product-id-type\\\&quot;;\\\&quot;description\\\&quot;;\\\&quot;internal-description\\\&quot;;\\\&quot;price\\\&quot;;\\\&quot;price-additional-info\\\&quot;;\\\&quot;quantity\\\&quot;;\\\&quot;min-quantity-alert\\\&quot;;\\\&quot;state\\\&quot;;\\\&quot;available-start-date\\\&quot;;\\\&quot;available-end-date\\\&quot;;\\\&quot;discount-price\\\&quot;;\\\&quot;discount-start-date\\\&quot;;\\\&quot;discount-end-date\\\&quot;;\\\&quot;discount-ranges\\\&quot;;\\\&quot;allow-quote-requests\\\&quot;;\\\&quot;leadtime-to-ship\\\&quot;;\\\&quot;min-order-quantity\\\&quot;;\\\&quot;max-order-quantity\\\&quot;;\\\&quot;package-quantity\\\&quot;;\\\&quot;update-delete\\\&quot;;\\\&quot;price-ranges\\\&quot;;\\\&quot;ecotax\\\&quot;;\\\&quot;gift-wrap\\\&quot;;\\\&quot;min-quantity-ordered\\\&quot;&lt;/pre&gt;&lt;br/&gt;For Dropship offers, do not use &lt;code&gt;discount-ranges&lt;/code&gt; and &lt;code&gt;price-ranges&lt;/code&gt; as they will be ignored.&lt;br/&gt;&lt;br/&gt;If you use specific sales channels, use: &lt;pre&gt;\\\&quot;price[channel&#x3D;channel code]\\\&quot;;\\\&quot;discount-price[channel&#x3D;channel code]\\\&quot;;\\\&quot;discount-start-date[channel&#x3D;channel code]\\\&quot;;\\\&quot;discount-end-date[channel&#x3D;channel code]\\\&quot;;\\\&quot;discount-ranges[channel&#x3D;channel code]\\\&quot;;\\\&quot;price-ranges[channel&#x3D;channel code]\\\&quot;&lt;/pre&gt; For Dropship offers, do not use &lt;code&gt;channel prices&lt;/code&gt;, as they will be ignored.&lt;br/&gt;&lt;br/&gt;If you use the price per measurement unit feature, use &lt;code&gt;pricing-unit&lt;/code&gt; to specify the unit corresponding to the submitted &lt;code&gt;price&lt;/code&gt;.&lt;br/&gt;&lt;br/&gt;If US Tax options are activated on the platform, use: &lt;code&gt;product-tax-code&lt;/code&gt; to facilitate tax calculations.&lt;br/&gt;&lt;br/&gt;If &lt;i&gt;Data collection related to circular economy regulations&lt;/i&gt; is enabled, use:&lt;br/&gt;&lt;pre&gt;\\\&quot;producer-id[EPR category code]\\\&quot;; \\\&quot;eco-contribution-amount[EPR category code]\\\&quot;&lt;/pre&gt;EPR category code must be one of: &lt;pre&gt;FR-AGROPACK, FR-ASL, FR-DASRIPAT, FR-DBPS, FR-DDS, FR-DEA, FR-DEEE, FR-DISPMED, FR-DIY, FR-EMBM, FR-GF, FR-JOUETS, FR-LUB, FR-MH, FR-MNU, FR-PA, FR-PAP, FR-PCHIM, FR-PMCB, FR-PNEU, FR-TABAC, FR-TLC, FR-VEHICULE, FR-VHU, DE-BATTG, DE-PACK, DE-WEEE, ES-PACK, ES-GPACK, ES-WEEE&lt;/pre&gt;&lt;br/&gt; | [optional] |
| **importMode** | **string**|  | [optional] |
| **operatorFormat** | **bool**| Force the use of the operator product format | [optional] [default to false] |
| **withProducts** | **bool**| This file also contains product information | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OF01Response201**](../Model/OF01Response201.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oF02()`

```php
oF02($import, $shopId): \OpenAPI\Client\Mirakl\Model\OF02Response200
```

Get information and statistics about an offer import



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'import' => 56, // int | Import identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->oF02($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF02: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import** | **int**| Import identifier | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OF02Response200**](../Model/OF02Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oF03()`

```php
oF03($import, $shopId): \SplFileObject
```

Get the error report file for an offer import

This API returns a CSV, XLSX or XML file, depending on the file format provided by the seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'import' => 56, // int | Import identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->oF03($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF03: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import** | **int**| Import identifier | |
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

## `oF04()`

```php
oF04($startDate, $endDate, $status, $mode, $origins, $shopId, $pageToken, $sort): \OpenAPI\Client\Mirakl\Model\OF04Response200
```

Get information and statistics about offer imports



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'startDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Start creation date for filtering
    'endDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | End creation date for filtering
    'status' => 'status_example', // string | Offer import status
    'mode' => 'mode_example', // string | Offer import mode
    'origins' => array('origins_example'), // string[] | List of offer import origins for filtering. This parameter can be supplied multiple times (origins=API&origins=FTP...).
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'pageToken' => 'pageToken_example', // string | Token retrieved from next_page_token or previous_page_token to get to next
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->oF04($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF04: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **\DateTime**| Start creation date for filtering | [optional] |
| **endDate** | **\DateTime**| End creation date for filtering | [optional] |
| **status** | **string**| Offer import status | [optional] |
| **mode** | **string**| Offer import mode | [optional] |
| **origins** | [**string[]**](../Model/string.md)| List of offer import origins for filtering. This parameter can be supplied multiple times (origins&#x3D;API&amp;origins&#x3D;FTP...). | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **pageToken** | **string**| Token retrieved from next_page_token or previous_page_token to get to next | [optional] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OF04Response200**](../Model/OF04Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oF21()`

```php
oF21($offerStateCodes, $sku, $productId, $favorite, $pricingChannelCode, $pricingCustomerOrganizationId, $shopId, $locale, $max, $offset, $sort, $order): \OpenAPI\Client\Mirakl\Model\OF21Response200
```

List offers of a shop



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'offerStateCodes' => 'offerStateCodes_example', // string | List of offer state codes
    'sku' => 'sku_example', // string | Offer's sku
    'productId' => 'productId_example', // string | Product's sku
    'favorite' => false, // bool | Filter only favorite offers
    'pricingChannelCode' => 'pricingChannelCode_example', // string | Filter used to pick prices on a specific channel
    'pricingCustomerOrganizationId' => 'pricingCustomerOrganizationId_example', // string | For Customer Pricing users only. Customer identifier code the API will use to return all prices and applicable price for this organization. Ignored if value does not exist.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
    'max' => 56, // int | Maximum number of items returned per page
    'offset' => 56, // int | Index of the first item (among all the results) in the returned page
    'sort' => 'sort_example', // string | How the results should be sorted
    'order' => 'order_example', // string | Sort direction
];

try {
    $result = $apiInstance->oF21($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF21: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerStateCodes** | **string**| List of offer state codes | [optional] |
| **sku** | **string**| Offer&#39;s sku | [optional] |
| **productId** | **string**| Product&#39;s sku | [optional] |
| **favorite** | **bool**| Filter only favorite offers | [optional] [default to false] |
| **pricingChannelCode** | **string**| Filter used to pick prices on a specific channel | [optional] |
| **pricingCustomerOrganizationId** | **string**| For Customer Pricing users only. Customer identifier code the API will use to return all prices and applicable price for this organization. Ignored if value does not exist. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |
| **max** | **int**| Maximum number of items returned per page | [optional] |
| **offset** | **int**| Index of the first item (among all the results) in the returned page | [optional] |
| **sort** | **string**| How the results should be sorted | [optional] |
| **order** | **string**| Sort direction | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OF21Response200**](../Model/OF21Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oF22()`

```php
oF22($offer, $pricingChannelCode, $pricingCustomerOrganizationId, $shopId, $locale): \OpenAPI\Client\Mirakl\Model\OF22Response200
```

Get information about an offer



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'offer' => 56, // int | Offer identifier
    'pricingChannelCode' => 'pricingChannelCode_example', // string | Filter used to pick prices on a specific channel
    'pricingCustomerOrganizationId' => 'pricingCustomerOrganizationId_example', // string | For Customer Pricing users only. Customer identifier code the API will use to return all prices and applicable price for this organization. Ignored if value does not exist.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
];

try {
    $result = $apiInstance->oF22($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF22: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer** | **int**| Offer identifier | |
| **pricingChannelCode** | **string**| Filter used to pick prices on a specific channel | [optional] |
| **pricingCustomerOrganizationId** | **string**| For Customer Pricing users only. Customer identifier code the API will use to return all prices and applicable price for this organization. Ignored if value does not exist. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OF22Response200**](../Model/OF22Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oF24()`

```php
oF24($shopId, $oF24Request): \OpenAPI\Client\Mirakl\Model\OF24Response201
```

Create, update, or delete offers

<p>Returns the import identifier to track the status of the update.</p><p>You must send all offer fields. Offer fields that are not sent are reset to their default value.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oF24Request' => new \OpenAPI\Client\Mirakl\Model\OF24Request(), // \OpenAPI\Client\Mirakl\Model\OF24Request
];

try {
    $result = $apiInstance->oF24($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF24: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oF24Request** | [**\OpenAPI\Client\Mirakl\Model\OF24Request**](../Model/OF24Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OF24Response201**](../Model/OF24Response201.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oF51()`

```php
oF51($lastRequestDate, $channelCodes, $shippingZones, $includeInactiveOffers, $includeFields, $shopId): \SplFileObject
```

Get offers CSV file

Get a CSV file that includes the offers updated and deleted since the last request date.<br/>For deleted offers, only offer-id, product-sku, shop-id, shop-sku, active and deleted columns are returned. <br/>If the last_request_date param is not set the api returns all the active offers (inactive offers can be included with include_inactive_offers parameter).<br/>If offers have custom fields, a column is added for each existing custom field with as header the code of the custom field.<br/><br/>Results are sorted by offer identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'lastRequestDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Date and time of your last request.<br/>If provided, retrieves all offers updated since this date and time, including deleted and inactive offers.<br/>If not provided, retrieves all active offers only, unless otherwise specified in the <i>include_inactive_offers</i> field.
    'channelCodes' => 'channelCodes_example', // string | List of the channel codes to filter with, using a comma (,) as a separator. If specified, only offers that can be sold on the specified channel(s) will be returned. If not, offers will be returned regardless of their channels.
    'shippingZones' => 'shippingZones_example', // string | List of the shipping zones codes to filter with, URL-encoded and using a comma (,) as a separator. If specified, only shipping information linked to the given zones will be returned. Otherwise, all shipping information for all zones will be returned.
    'includeInactiveOffers' => false, // bool | When calling the API in full mode (i.e. when no <i>last_request_date</i> is provided), inactive offers are not returned. To retrieve both active and inactive offers, set this field to true.<br />When calling the API in differential mode (i.e. when the <i>last_request_date</i> is provided), both active and inactive offers are returned. This field cannot be used in differential mode otherwise the call fails.
    'includeFields' => 'includeFields_example', // string | List of the fields to include, URL-encoded and using a comma (,) as a separator. If specified, only listed fields will be returned.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->oF51($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF51: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lastRequestDate** | **\DateTime**| Date and time of your last request.&lt;br/&gt;If provided, retrieves all offers updated since this date and time, including deleted and inactive offers.&lt;br/&gt;If not provided, retrieves all active offers only, unless otherwise specified in the &lt;i&gt;include_inactive_offers&lt;/i&gt; field. | [optional] |
| **channelCodes** | **string**| List of the channel codes to filter with, using a comma (,) as a separator. If specified, only offers that can be sold on the specified channel(s) will be returned. If not, offers will be returned regardless of their channels. | [optional] |
| **shippingZones** | **string**| List of the shipping zones codes to filter with, URL-encoded and using a comma (,) as a separator. If specified, only shipping information linked to the given zones will be returned. Otherwise, all shipping information for all zones will be returned. | [optional] |
| **includeInactiveOffers** | **bool**| When calling the API in full mode (i.e. when no &lt;i&gt;last_request_date&lt;/i&gt; is provided), inactive offers are not returned. To retrieve both active and inactive offers, set this field to true.&lt;br /&gt;When calling the API in differential mode (i.e. when the &lt;i&gt;last_request_date&lt;/i&gt; is provided), both active and inactive offers are returned. This field cannot be used in differential mode otherwise the call fails. | [optional] [default to false] |
| **includeFields** | **string**| List of the fields to include, URL-encoded and using a comma (,) as a separator. If specified, only listed fields will be returned. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oF52()`

```php
oF52($shopId, $oF52Request): \OpenAPI\Client\Mirakl\Model\OF52Response200
```

Export offers CSV or JSON file asynchronously

Export status and files links can be retrieved by calling OF53.<br/>Get a CSV or JSON file that includes the offers updated and deleted since the last request date.<br/><br/> <div class=\"alert alert-warning\" role=\"alert\"> To ease testing processes, the minimum values for \"megabytes_per_chunk\" and \"items_per_chunk\" have been lowered on TEST and DEV environments.<br/> Please adapt these values on PROD environments. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'oF52Request' => new \OpenAPI\Client\Mirakl\Model\OF52Request(), // \OpenAPI\Client\Mirakl\Model\OF52Request
];

try {
    $result = $apiInstance->oF52($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF52: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **oF52Request** | [**\OpenAPI\Client\Mirakl\Model\OF52Request**](../Model/OF52Request.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OF52Response200**](../Model/OF52Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oF53()`

```php
oF53($trackingId, $shopId): \OpenAPI\Client\Mirakl\Model\OF53Response200
```

Poll the status of an asynchronous offer export (OF52)

Retrieve the status for an OF52 offer export.<br/> When the export is complete, the URLs to retrieve the files are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'trackingId' => 'trackingId_example', // string | The asynchronous offer export id
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->oF53($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->oF53: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trackingId** | **string**| The asynchronous offer export id | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\OF53Response200**](../Model/OF53Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p11()`

```php
p11($productIds, $productReferences, $offerStateCodes, $allOffers, $channelCodes, $allChannels, $pricingChannelCode, $pricingCustomerOrganizationId, $shippingZones, $allShippingZones, $shopId, $locale, $max, $offset, $sort, $order): \OpenAPI\Client\Mirakl\Model\P11Response200
```

List offers for each given product



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'productIds' => 'productIds_example', // string | List of product's skus separated with comma. Limited to 100 values. One of the two is required product_ids or product_references.
    'productReferences' => 'productReferences_example', // string | List of the product's identifiers with type (structure: \"product_references=&lt;productIdType&gt;|&lt;productId&gt;,&lt;productIdType&gt;|&lt;productId&gt;, ...\"). Limited to 100 values.  One of the two is required product_ids or product_references.<br/>Example: /api/products/offers?product_references=EAN|3120201243238
    'offerStateCodes' => 'offerStateCodes_example', // string | List of offer state codes
    'allOffers' => false, // bool | If <code>false</code> returns only active offers. If <code>true</code> return all offers.
    'channelCodes' => 'channelCodes_example', // string | List of the channel codes to filter with, using a comma (,) as a separator. If specified, only offers that can be sold on the specified channel(s) will be returned. If not, offers will be returned regardless of their channels.
    'allChannels' => false, // bool | If <code>false</code>, filters the offers with the given channel_codes or all shop channels if no channel_codes are given. <br> If <code>true</code>, filters on all shop channels and ignores the channel_codes.
    'pricingChannelCode' => 'pricingChannelCode_example', // string | Filter used to pick prices on a specific channel
    'pricingCustomerOrganizationId' => 'pricingCustomerOrganizationId_example', // string | For Customer Pricing users only. Customer identifier code the API will use to return all prices and applicable price for this organization. Ignored if value does not exist.
    'shippingZones' => 'shippingZones_example', // string | List of shipping zones. Filter used to pick shipping prices on one or multiple shipping zones
    'allShippingZones' => false, // bool | If <code>false</code>, filters the offers with the given shipping zones. <br> If <code>true</code>, selects all shop shipping zones and ignores the provided shipping_zones.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'locale' => 'locale_example', // string | &lt;ISO-639&gt;_&lt;ISO-3166&gt; (\"en_US\") or &lt;ISO-639&gt; (\"en\") locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office.
    'max' => 56, // int | Maximum number of items returned per page
    'offset' => 56, // int | Index of the first item (among all the results) in the returned page
    'sort' => 'sort_example', // string | How the results should be sorted
    'order' => 'order_example', // string | Sort direction
];

try {
    $result = $apiInstance->p11($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->p11: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productIds** | **string**| List of product&#39;s skus separated with comma. Limited to 100 values. One of the two is required product_ids or product_references. | [optional] |
| **productReferences** | **string**| List of the product&#39;s identifiers with type (structure: \&quot;product_references&#x3D;&amp;lt;productIdType&amp;gt;|&amp;lt;productId&amp;gt;,&amp;lt;productIdType&amp;gt;|&amp;lt;productId&amp;gt;, ...\&quot;). Limited to 100 values.  One of the two is required product_ids or product_references.&lt;br/&gt;Example: /api/products/offers?product_references&#x3D;EAN|3120201243238 | [optional] |
| **offerStateCodes** | **string**| List of offer state codes | [optional] |
| **allOffers** | **bool**| If &lt;code&gt;false&lt;/code&gt; returns only active offers. If &lt;code&gt;true&lt;/code&gt; return all offers. | [optional] [default to false] |
| **channelCodes** | **string**| List of the channel codes to filter with, using a comma (,) as a separator. If specified, only offers that can be sold on the specified channel(s) will be returned. If not, offers will be returned regardless of their channels. | [optional] |
| **allChannels** | **bool**| If &lt;code&gt;false&lt;/code&gt;, filters the offers with the given channel_codes or all shop channels if no channel_codes are given. &lt;br&gt; If &lt;code&gt;true&lt;/code&gt;, filters on all shop channels and ignores the channel_codes. | [optional] [default to false] |
| **pricingChannelCode** | **string**| Filter used to pick prices on a specific channel | [optional] |
| **pricingCustomerOrganizationId** | **string**| For Customer Pricing users only. Customer identifier code the API will use to return all prices and applicable price for this organization. Ignored if value does not exist. | [optional] |
| **shippingZones** | **string**| List of shipping zones. Filter used to pick shipping prices on one or multiple shipping zones | [optional] |
| **allShippingZones** | **bool**| If &lt;code&gt;false&lt;/code&gt;, filters the offers with the given shipping zones. &lt;br&gt; If &lt;code&gt;true&lt;/code&gt;, selects all shop shipping zones and ignores the provided shipping_zones. | [optional] [default to false] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **locale** | **string**| &amp;lt;ISO-639&amp;gt;_&amp;lt;ISO-3166&amp;gt; (\&quot;en_US\&quot;) or &amp;lt;ISO-639&amp;gt; (\&quot;en\&quot;) locale for internationalized data translation. The APIs only accept locales that are equivalent to the languages activated in the back-office. | [optional] |
| **max** | **int**| Maximum number of items returned per page | [optional] |
| **offset** | **int**| Index of the first item (among all the results) in the returned page | [optional] |
| **sort** | **string**| How the results should be sorted | [optional] |
| **order** | **string**| Sort direction | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\P11Response200**](../Model/P11Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pRI01()`

```php
pRI01($shopId, $file): \OpenAPI\Client\Mirakl\Model\PRI01Response201
```

Import a price file

Import a .csv file to submit all applicable prices for an offer.<br/> The import mode is delete and replace: any existing price that is not submitted will be deleted.<br/> If Price Approval is enabled, this API creates and updates pending prices; ongoing prices will remain.<br/> Returns an import identifier to track the status of the import and retrieve an error report if applicable.<br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'file' => '/path/to/file.txt', // \SplFileObject | Import CSV file to upload. Use <code>multipart/form-data</code> with name <code>file</code>.<br/> Csv format:<br/> <ul> <li><code>\\\"offer-sku\\\";\\\"price\\\";\\\"discount-price\\\";\\\"discount-start-date\\\";\\\"discount-end-date\\\"</code></li> <ul>     <li>1 line = 1 offer price</li>     <li>List prices for the same offer together</li>     <li>Limits: 50 prices can be created for an offer</li> </ul> <li><b>Volume Pricing users</b>: use additional columns <code>price-ranges</code> and <code>discount-ranges</code> Not applicable for Dropship offers</li> <li><b>Channel Pricing users</b>: use additional column <code>channels</code> Not applicable for Dropship offers</li> <li><b>Scheduled Pricing users</b>: use additional columns <code>start-date</code> and <code>end-date</code> Not applicable for Dropship offers</li> <li><b>Customer Pricing users</b>: use additional columns <code>customer-organization-ids</code> and <code>customer-group-ids</code> Not applicable for Dropship offers</li> </ul>
];

try {
    $result = $apiInstance->pRI01($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->pRI01: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| Import CSV file to upload. Use &lt;code&gt;multipart/form-data&lt;/code&gt; with name &lt;code&gt;file&lt;/code&gt;.&lt;br/&gt; Csv format:&lt;br/&gt; &lt;ul&gt; &lt;li&gt;&lt;code&gt;\\\&quot;offer-sku\\\&quot;;\\\&quot;price\\\&quot;;\\\&quot;discount-price\\\&quot;;\\\&quot;discount-start-date\\\&quot;;\\\&quot;discount-end-date\\\&quot;&lt;/code&gt;&lt;/li&gt; &lt;ul&gt;     &lt;li&gt;1 line &#x3D; 1 offer price&lt;/li&gt;     &lt;li&gt;List prices for the same offer together&lt;/li&gt;     &lt;li&gt;Limits: 50 prices can be created for an offer&lt;/li&gt; &lt;/ul&gt; &lt;li&gt;&lt;b&gt;Volume Pricing users&lt;/b&gt;: use additional columns &lt;code&gt;price-ranges&lt;/code&gt; and &lt;code&gt;discount-ranges&lt;/code&gt; Not applicable for Dropship offers&lt;/li&gt; &lt;li&gt;&lt;b&gt;Channel Pricing users&lt;/b&gt;: use additional column &lt;code&gt;channels&lt;/code&gt; Not applicable for Dropship offers&lt;/li&gt; &lt;li&gt;&lt;b&gt;Scheduled Pricing users&lt;/b&gt;: use additional columns &lt;code&gt;start-date&lt;/code&gt; and &lt;code&gt;end-date&lt;/code&gt; Not applicable for Dropship offers&lt;/li&gt; &lt;li&gt;&lt;b&gt;Customer Pricing users&lt;/b&gt;: use additional columns &lt;code&gt;customer-organization-ids&lt;/code&gt; and &lt;code&gt;customer-group-ids&lt;/code&gt; Not applicable for Dropship offers&lt;/li&gt; &lt;/ul&gt; | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\PRI01Response201**](../Model/PRI01Response201.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pRI02()`

```php
pRI02($importId, $startDate, $endDate, $status, $origins, $shopId, $pageToken, $sort): \OpenAPI\Client\Mirakl\Model\PRI02Response200
```

Get information and statistics about an offer pricing import



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'importId' => array('importId_example'), // string[] | Import identifiers
    'startDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | Start creation date for filtering
    'endDate' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime | End creation date for filtering
    'status' => 'status_example', // string | Offer import status
    'origins' => array('origins_example'), // string[] | List of offer pricing import origins for filtering.
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
    'pageToken' => 'pageToken_example', // string | Token retrieved from next_page_token or previous_page_token to get to next
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->pRI02($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->pRI02: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importId** | [**string[]**](../Model/string.md)| Import identifiers | [optional] |
| **startDate** | **\DateTime**| Start creation date for filtering | [optional] |
| **endDate** | **\DateTime**| End creation date for filtering | [optional] |
| **status** | **string**| Offer import status | [optional] |
| **origins** | [**string[]**](../Model/string.md)| List of offer pricing import origins for filtering. | [optional] |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |
| **pageToken** | **string**| Token retrieved from next_page_token or previous_page_token to get to next | [optional] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\PRI02Response200**](../Model/PRI02Response200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pRI03()`

```php
pRI03($importId, $shopId): \SplFileObject
```

Get the error report for a price import in CSV format

Only returns lines of offers with at least one offer price in error.<br/> The first column contains the line number in error. The second column contains the error reason.<br/> The returned file is ready to be reimported after the values have been fixed.<br/> Offer prices that were submitted in the price import but don't appear in the error report were successfully imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

$associative_array = [
    'importId' => 'importId_example', // string | Import identifier
    'shopId' => 56, // int | Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used.
];

try {
    $result = $apiInstance->pRI03($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->pRI03: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importId** | **string**| Import identifier | |
| **shopId** | **int**| Use this parameter when your user has access to several shops. If not specified, the shop_id from your default shop will be used. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
