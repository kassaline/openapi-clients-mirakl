# OpenAPI\Client\Mirakl\SubscriptionsApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addSubscription()**](SubscriptionsApi.md#addSubscription) | **POST** /subscriptions | Subscribe for event |
| [**deleteSubscription()**](SubscriptionsApi.md#deleteSubscription) | **DELETE** /subscriptions/{id_subscription} | Unsubscribe from event |
| [**getSubscription()**](SubscriptionsApi.md#getSubscription) | **GET** /subscriptions/{id_subscription} | Get a push notification subscription by ID |
| [**getSubscriptions()**](SubscriptionsApi.md#getSubscriptions) | **GET** /subscriptions | Get a list of your push notification subscriptions |
| [**updateSubscription()**](SubscriptionsApi.md#updateSubscription) | **PATCH** /subscriptions/{id_subscription} | Update subscription |


## `addSubscription()`

```php
addSubscription($storefront, $body): \OpenAPI\Client\Mirakl\Model\ApiResponseSubscription
```

Subscribe for event

Create a new push notification subscription for an event. Using this endpoint will result in a callback verification request being sent to the given callback_url. See the Push Notifications documentation page for more information on push notifications and callback verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront
$body = new \OpenAPI\Client\Mirakl\Model\PickSubscriptionCallbackUrlOrFallbackEmailOrEventName(); // \OpenAPI\Client\Mirakl\Model\PickSubscriptionCallbackUrlOrFallbackEmailOrEventName

try {
    $result = $apiInstance->addSubscription($storefront, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->addSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | |
| **body** | **\OpenAPI\Client\Mirakl\Model\PickSubscriptionCallbackUrlOrFallbackEmailOrEventName**|  | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseSubscription**](../Model/ApiResponseSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscription()`

```php
deleteSubscription($idSubscription)
```

Unsubscribe from event

Deletes the specified push notification subscription from the database. To re-subscribe to the given event, you must use the add subscription endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idSubscription = 56; // int

try {
    $apiInstance->deleteSubscription($idSubscription);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idSubscription** | **int**|  | |

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

## `getSubscription()`

```php
getSubscription($idSubscription): \OpenAPI\Client\Mirakl\Model\ApiResponseSubscription
```

Get a push notification subscription by ID

Get a push notification subscription by <code>id_subscription</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idSubscription = 56; // int

try {
    $result = $apiInstance->getSubscription($idSubscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idSubscription** | **int**|  | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseSubscription**](../Model/ApiResponseSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptions()`

```php
getSubscriptions($storefront, $eventName, $limit, $offset): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseSubscription
```

Get a list of your push notification subscriptions

Get a list of your push notification subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront(); // \OpenAPI\Client\Mirakl\Model\Storefront | Parameter to select the affected storefront
$eventName = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\SubscriptionEventName(); // \OpenAPI\Client\Mirakl\Model\SubscriptionEventName | Event name
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getSubscriptions($storefront, $eventName, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | [optional] |
| **eventName** | [**\OpenAPI\Client\Mirakl\Model\SubscriptionEventName**](../Model/.md)| Event name | [optional] |
| **limit** | **int**| Desired size of result set | [optional] [default to 30] |
| **offset** | **int**| Offset applied to result set | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseSubscription**](../Model/CollectionApiResponseSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($idSubscription, $body): \OpenAPI\Client\Mirakl\Model\ApiResponseSubscription
```

Update subscription

Update the fields of a push notification subscription. You can set the is_active flag to false to stop receiving notications for the subscription's event, or to true to re-enable a disabled subscription. If you change the value of the callback_url, the new callback_url will immediately receive a verification request. See the Callback URL Verification section of the Push Notifications documentation for details on validation requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idSubscription = 56; // int
$body = new \OpenAPI\Client\Mirakl\Model\PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront(); // \OpenAPI\Client\Mirakl\Model\PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront

try {
    $result = $apiInstance->updateSubscription($idSubscription, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idSubscription** | **int**|  | |
| **body** | **\OpenAPI\Client\Mirakl\Model\PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront**|  | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseSubscription**](../Model/ApiResponseSubscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
