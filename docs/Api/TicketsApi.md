# OpenAPI\Client\Mirakl\TicketsApi

All URIs are relative to /v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**closeTicket()**](TicketsApi.md#closeTicket) | **PATCH** /tickets/{id_ticket}/close | Close a ticket by ID |
| [**createTicketMessage()**](TicketsApi.md#createTicketMessage) | **POST** /tickets/{id_ticket}/messages | Create a new message for the ticket |
| [**getTicket()**](TicketsApi.md#getTicket) | **GET** /tickets/{id_ticket} | Get a ticket by ID |
| [**getTicketMessages()**](TicketsApi.md#getTicketMessages) | **GET** /tickets/messages | Get a list of ticket messages |
| [**getTickets()**](TicketsApi.md#getTickets) | **GET** /tickets | Get a list of tickets |
| [**openTicket()**](TicketsApi.md#openTicket) | **POST** /tickets | Open a ticket |


## `closeTicket()`

```php
closeTicket($idTicket)
```

Close a ticket by ID

Close a ticket given its `id_ticket`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idTicket = 'idTicket_example'; // string | The unique ID of a ticket

try {
    $apiInstance->closeTicket($idTicket);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->closeTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idTicket** | **string**| The unique ID of a ticket | |

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

## `createTicketMessage()`

```php
createTicketMessage($idTicket, $createTicketMessageRequest)
```

Create a new message for the ticket

Create a new message for the ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idTicket = 'idTicket_example'; // string | The unique ID of a ticket
$createTicketMessageRequest = new \OpenAPI\Client\Mirakl\Model\CreateTicketMessageRequest(); // \OpenAPI\Client\Mirakl\Model\CreateTicketMessageRequest | Body params for the new message.

try {
    $apiInstance->createTicketMessage($idTicket, $createTicketMessageRequest);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createTicketMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idTicket** | **string**| The unique ID of a ticket | |
| **createTicketMessageRequest** | [**\OpenAPI\Client\Mirakl\Model\CreateTicketMessageRequest**](../Model/CreateTicketMessageRequest.md)| Body params for the new message. | |

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

## `getTicket()`

```php
getTicket($idTicket, $embedded): \OpenAPI\Client\Mirakl\Model\ApiResponseTicketWithEmbedded
```

Get a ticket by ID

Get a ticket given its `id_ticket`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idTicket = 'idTicket_example'; // string | The unique ID of a ticket
$embedded = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\TicketEmbeddable()); // \OpenAPI\Client\Mirakl\Model\TicketEmbeddable[] | A string of comma-separated values. Possible values: buyer, product, messages, order_units, files

try {
    $result = $apiInstance->getTicket($idTicket, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idTicket** | **string**| The unique ID of a ticket | |
| **embedded** | [**\OpenAPI\Client\Mirakl\Model\TicketEmbeddable[]**](../Model/\OpenAPI\Client\Mirakl\Model\TicketEmbeddable.md)| A string of comma-separated values. Possible values: buyer, product, messages, order_units, files | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseTicketWithEmbedded**](../Model/ApiResponseTicketWithEmbedded.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTicketMessages()`

```php
getTicketMessages($limit, $sort, $offset, $tsCreatedFromIso, $fulfillmentType): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseTicketMessage
```

Get a list of ticket messages

Get a list of your ticket messages. If you want to get only ticket messages for a specific ticket, you should use the `/tickets/{id_ticket}/` endpoint and call it with `embedded=messages`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Desired size of result set (default: 30)
$sort = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\TicketMessagesSort(); // \OpenAPI\Client\Mirakl\Model\TicketMessagesSort | The sort direction
$offset = 56; // int | Offset applied to result set (default: 0)
$tsCreatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter ticket messages by their creation timestamp in iso 8601
$fulfillmentType = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\FulfillmentType()); // \OpenAPI\Client\Mirakl\Model\FulfillmentType[] | Filter tickets by their fulfillment type. <br/> The value `fulfilled_by_kaufland` is **DEPRECATED**.

try {
    $result = $apiInstance->getTicketMessages($limit, $sort, $offset, $tsCreatedFromIso, $fulfillmentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTicketMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Desired size of result set (default: 30) | [optional] |
| **sort** | [**\OpenAPI\Client\Mirakl\Model\TicketMessagesSort**](../Model/.md)| The sort direction | [optional] |
| **offset** | **int**| Offset applied to result set (default: 0) | [optional] |
| **tsCreatedFromIso** | **\DateTime**| Filter ticket messages by their creation timestamp in iso 8601 | [optional] |
| **fulfillmentType** | [**\OpenAPI\Client\Mirakl\Model\FulfillmentType[]**](../Model/\OpenAPI\Client\Mirakl\Model\FulfillmentType.md)| Filter tickets by their fulfillment type. &lt;br/&gt; The value &#x60;fulfilled_by_kaufland&#x60; is **DEPRECATED**. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseTicketMessage**](../Model/CollectionApiResponseTicketMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTickets()`

```php
getTickets($sort, $limit, $status, $openReason, $topic, $idBuyer, $tsCreatedFromIso, $tsUpdatedFromIso, $offset, $storefront, $fulfillmentType): \OpenAPI\Client\Mirakl\Model\CollectionApiResponseTicket
```

Get a list of tickets

Get a list of tickets for given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort = new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\TicketsSort(); // \OpenAPI\Client\Mirakl\Model\TicketsSort | The sort direction
$limit = 56; // int | Desired size of result set (default: 30)
$status = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\TicketStatus()); // \OpenAPI\Client\Mirakl\Model\TicketStatus[] | The status of the ticket
$openReason = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\TicketReason()); // \OpenAPI\Client\Mirakl\Model\TicketReason[] | The reason for this ticket.
$topic = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\TicketTopic()); // \OpenAPI\Client\Mirakl\Model\TicketTopic[] | The topic of this ticket.
$idBuyer = 56; // int | The buyer's internal id
$tsCreatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter tickets by their creation timestamp in ISO 8601
$tsUpdatedFromIso = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter tickets by their update timestamp in ISO 8601
$offset = 56; // int | Offset applied to the result set (default: 0)
$storefront = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\Storefront()); // \OpenAPI\Client\Mirakl\Model\Storefront[] | Identifier for the storefront the tickets should belong to
$fulfillmentType = array(new \OpenAPI\Client\Mirakl\Model\\OpenAPI\Client\Mirakl\Model\FulfillmentType()); // \OpenAPI\Client\Mirakl\Model\FulfillmentType[] | Filter tickets by their fulfillment type. <br/> The value `fulfilled_by_kaufland` is **DEPRECATED**.

try {
    $result = $apiInstance->getTickets($sort, $limit, $status, $openReason, $topic, $idBuyer, $tsCreatedFromIso, $tsUpdatedFromIso, $offset, $storefront, $fulfillmentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort** | [**\OpenAPI\Client\Mirakl\Model\TicketsSort**](../Model/.md)| The sort direction | [optional] |
| **limit** | **int**| Desired size of result set (default: 30) | [optional] |
| **status** | [**\OpenAPI\Client\Mirakl\Model\TicketStatus[]**](../Model/\OpenAPI\Client\Mirakl\Model\TicketStatus.md)| The status of the ticket | [optional] |
| **openReason** | [**\OpenAPI\Client\Mirakl\Model\TicketReason[]**](../Model/\OpenAPI\Client\Mirakl\Model\TicketReason.md)| The reason for this ticket. | [optional] |
| **topic** | [**\OpenAPI\Client\Mirakl\Model\TicketTopic[]**](../Model/\OpenAPI\Client\Mirakl\Model\TicketTopic.md)| The topic of this ticket. | [optional] |
| **idBuyer** | **int**| The buyer&#39;s internal id | [optional] |
| **tsCreatedFromIso** | **\DateTime**| Filter tickets by their creation timestamp in ISO 8601 | [optional] |
| **tsUpdatedFromIso** | **\DateTime**| Filter tickets by their update timestamp in ISO 8601 | [optional] |
| **offset** | **int**| Offset applied to the result set (default: 0) | [optional] |
| **storefront** | [**\OpenAPI\Client\Mirakl\Model\Storefront[]**](../Model/\OpenAPI\Client\Mirakl\Model\Storefront.md)| Identifier for the storefront the tickets should belong to | [optional] |
| **fulfillmentType** | [**\OpenAPI\Client\Mirakl\Model\FulfillmentType[]**](../Model/\OpenAPI\Client\Mirakl\Model\FulfillmentType.md)| Filter tickets by their fulfillment type. &lt;br/&gt; The value &#x60;fulfilled_by_kaufland&#x60; is **DEPRECATED**. | [optional] |

### Return type

[**\OpenAPI\Client\Mirakl\Model\CollectionApiResponseTicket**](../Model/CollectionApiResponseTicket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openTicket()`

```php
openTicket($openTicketRequest): \OpenAPI\Client\Mirakl\Model\ApiResponseOpenTicketResponse
```

Open a ticket

Open a ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Mirakl\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$openTicketRequest = new \OpenAPI\Client\Mirakl\Model\OpenTicketRequest(); // \OpenAPI\Client\Mirakl\Model\OpenTicketRequest

try {
    $result = $apiInstance->openTicket($openTicketRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->openTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **openTicketRequest** | [**\OpenAPI\Client\Mirakl\Model\OpenTicketRequest**](../Model/OpenTicketRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Mirakl\Model\ApiResponseOpenTicketResponse**](../Model/ApiResponseOpenTicketResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
