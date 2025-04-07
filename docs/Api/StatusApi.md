# OpenAPI\Client\Mirakl\StatusApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ping()**](StatusApi.md#ping) | **GET** /status/ping | Ping the Marketplace Seller API by Kaufland |


## `ping()`

```php
ping(): \OpenAPI\Client\Mirakl\Model\ApiResponsePingMessage
```

Ping the Marketplace Seller API by Kaufland

A simple method you can call that will return a constant value as long as everything is good.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->ping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponsePingMessage**](../Model/ApiResponsePingMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
