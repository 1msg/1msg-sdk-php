# OneMsgSdk\MessagingApi

Send messages, files, templates, and other content

All URIs are relative to https://api.1msg.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReadMessage()**](MessagingApi.md#createReadMessage) | **POST** /readMessage | Mark message as read |
| [**createUploadMedia()**](MessagingApi.md#createUploadMedia) | **POST** /uploadMedia | Upload media |
| [**deleteMedia()**](MessagingApi.md#deleteMedia) | **DELETE** /media/{mediaId} | Delete media from WABA storage |
| [**deleteMediaLegacy()**](MessagingApi.md#deleteMediaLegacy) | **POST** /deleteMedia | Delete media from WABA storage (deprecated alias) |
| [**getMmLiteStatus()**](MessagingApi.md#getMmLiteStatus) | **GET** /mmLiteStatus | Get MM Lite availability and status |
| [**listMessages()**](MessagingApi.md#listMessages) | **GET** /messages | Get messages list |
| [**retrieveMedia()**](MessagingApi.md#retrieveMedia) | **GET** /retrieveMedia | Retrieve uploaded media metadata |
| [**sendAddressMessage()**](MessagingApi.md#sendAddressMessage) | **POST** /sendAddressMessage | Send address request message |
| [**sendButton()**](MessagingApi.md#sendButton) | **POST** /sendButton | Send Reply Buttons Message |
| [**sendCarousel()**](MessagingApi.md#sendCarousel) | **POST** /sendCarousel | Send Carousel |
| [**sendContact()**](MessagingApi.md#sendContact) | **POST** /sendContact | Send a Contact |
| [**sendCtaUrl()**](MessagingApi.md#sendCtaUrl) | **POST** /sendCtaUrl | Send CTA URL interactive message |
| [**sendFile()**](MessagingApi.md#sendFile) | **POST** /sendFile | Send a File |
| [**sendFlow()**](MessagingApi.md#sendFlow) | **POST** /sendFlow | Send WhatsApp Flow Message |
| [**sendList()**](MessagingApi.md#sendList) | **POST** /sendList | Send List Message |
| [**sendLocation()**](MessagingApi.md#sendLocation) | **POST** /sendLocation | Send a Location |
| [**sendLocationRequest()**](MessagingApi.md#sendLocationRequest) | **POST** /sendLocationRequest | Send Location Request Message |
| [**sendMessage()**](MessagingApi.md#sendMessage) | **POST** /sendMessage | Send a Message |
| [**sendOrderDetails()**](MessagingApi.md#sendOrderDetails) | **POST** /sendOrderDetails | Send order details (India payments template) |
| [**sendPaymentRequest()**](MessagingApi.md#sendPaymentRequest) | **POST** /sendPaymentRequest | Send payment request (regional) |
| [**sendProduct()**](MessagingApi.md#sendProduct) | **POST** /sendProduct | Send a Product |
| [**sendReaction()**](MessagingApi.md#sendReaction) | **POST** /sendReaction | Send Reaction |
| [**sendSticker()**](MessagingApi.md#sendSticker) | **POST** /sendSticker | Send sticker message |


## `createReadMessage()`

```php
createReadMessage($token, $message_id, $msg_id, $typing_indicator): \OneMsgSdk\Model\CreateReadMessage200Response
```

Mark message as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$message_id = 'message_id_example'; // string
$msg_id = 'msg_id_example'; // string
$typing_indicator = false; // bool | Show WhatsApp typing indicator (max 25s or until reply)

try {
    $result = $apiInstance->createReadMessage($token, $message_id, $msg_id, $typing_indicator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createReadMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **message_id** | **string**|  | [optional] |
| **msg_id** | **string**|  | [optional] |
| **typing_indicator** | **bool**| Show WhatsApp typing indicator (max 25s or until reply) | [optional] [default to false] |

### Return type

[**\OneMsgSdk\Model\CreateReadMessage200Response**](../Model/CreateReadMessage200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUploadMedia()`

```php
createUploadMedia($token, $request_body)
```

Upload media

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$request_body = NULL; // array<string,mixed>

try {
    $apiInstance->createUploadMedia($token, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createUploadMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMedia()`

```php
deleteMedia($token, $media_id): \OneMsgSdk\Model\SuccessResponse
```

Delete media from WABA storage

Delete previously uploaded media by numeric `mediaId` (from `/uploadMedia`).  This is the canonical deletion endpoint and uses the REST `DELETE` verb on the media resource path. The older `POST /deleteMedia` is a deprecated alias.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$media_id = 'media_id_example'; // string | Numeric WABA media id

try {
    $result = $apiInstance->deleteMedia($token, $media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->deleteMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **media_id** | **string**| Numeric WABA media id | |

### Return type

[**\OneMsgSdk\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMediaLegacy()`

```php
deleteMediaLegacy($token, $delete_media_legacy_request): \OneMsgSdk\Model\SuccessResponse
```

Delete media from WABA storage (deprecated alias)

**Deprecated.** Use `DELETE /media/{mediaId}` instead.  This POST alias is kept for backward compatibility with earlier integrations. New integrations should call `DELETE /media/{mediaId}`: 1msg follows REST conventions for resource deletion going forward (delete a resource with the `DELETE` verb on its resource path).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$delete_media_legacy_request = new \OneMsgSdk\Model\DeleteMediaLegacyRequest(); // \OneMsgSdk\Model\DeleteMediaLegacyRequest

try {
    $result = $apiInstance->deleteMediaLegacy($token, $delete_media_legacy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->deleteMediaLegacy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **delete_media_legacy_request** | [**\OneMsgSdk\Model\DeleteMediaLegacyRequest**](../Model/DeleteMediaLegacyRequest.md)|  | |

### Return type

[**\OneMsgSdk\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMmLiteStatus()`

```php
getMmLiteStatus($token): \OneMsgSdk\Model\GetMmLiteStatus200Response
```

Get MM Lite availability and status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->getMmLiteStatus($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMmLiteStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgSdk\Model\GetMmLiteStatus200Response**](../Model/GetMmLiteStatus200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMessages()`

```php
listMessages($token): \OneMsgSdk\Model\ListMessages200Response
```

Get messages list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->listMessages($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->listMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgSdk\Model\ListMessages200Response**](../Model/ListMessages200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveMedia()`

```php
retrieveMedia($token, $media_id): \OneMsgSdk\Model\RetrieveMedia200Response
```

Retrieve uploaded media metadata

Get WABA media URL and metadata by mediaId (from uploadMedia). The returned `url` is temporary and typically expires within ~5 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$media_id = 'media_id_example'; // string

try {
    $result = $apiInstance->retrieveMedia($token, $media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->retrieveMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **media_id** | **string**|  | |

### Return type

[**\OneMsgSdk\Model\RetrieveMedia200Response**](../Model/RetrieveMedia200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendAddressMessage()`

```php
sendAddressMessage($token, $send_address_message_request): \OneMsgSdk\Model\MessageSentResponse
```

Send address request message

Request shipping address from the user (WhatsApp interactive `address_message`).  **India and Singapore only.** Requires: - Business WhatsApp number registered in that country - Recipient phone matching the country (`+91` ↔ `IN`, `+65` ↔ `SG`)  Pass `country: \"IN\"` or `country: \"SG\"`. Eligibility is validated upstream; mismatches (e.g. Singapore phone with `country: \"IN\"`) return errors such as `Unsupported Interactive Message type` (HTTP 200 with `sent: false`).  Optional action parameters: `values`, `saved_addresses`, `validation_errors`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_address_message_request = {"phone":6531650115,"body":"Thanks for your order! Tell us what address you’d like this delivered to.","country":"SG"}; // \OneMsgSdk\Model\SendAddressMessageRequest

try {
    $result = $apiInstance->sendAddressMessage($token, $send_address_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendAddressMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_address_message_request** | [**\OneMsgSdk\Model\SendAddressMessageRequest**](../Model/SendAddressMessageRequest.md)|  | |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendButton()`

```php
sendButton($token, $send_button_request): \OneMsgSdk\Model\MessageSentResponse
```

Send Reply Buttons Message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_button_request = {"phone":"{{testPhone}}","body":"This is a buttons message","footer":"Footer","sections":[{"type":"reply","reply":{"id":"1","title":"Button 1"}}]}; // \OneMsgSdk\Model\SendButtonRequest

try {
    $result = $apiInstance->sendButton($token, $send_button_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendButton: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_button_request** | [**\OneMsgSdk\Model\SendButtonRequest**](../Model/SendButtonRequest.md)|  | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendCarousel()`

```php
sendCarousel($token, $params, $body, $quoted_msg_id, $chat_id, $phone): \OneMsgSdk\Model\MessageSentResponse
```

Send Carousel

You can send product cards via Carousel in two ways:  Template messages: do not require a 24-hour customer service window between you and the recipient. Use sendTemplate.  Free-form messages: can be sent only when a customer service window is open between you and the recipient. Use sendCarousel.  The message structure in /sendCarousel is largely similar to sending a template. However, in this case you must  explicitly specify all elements that are created in advance when working with templates. This is because the message  is sent without using a template.  In /sendCarousel, for sending a Catalog Carousel there can be either 1 URL button or one or more quick reply buttons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$params = array(new \stdClass); // object[] | Required. Template-like structure (same as sendTemplate params). Must include a CAROUSEL component and its cards.  Structure: - params[] item with type CAROUSEL and cards (2..10) - cards[] item:   - components[] items:     - header: parameters[0] with type image/video/product       - image: {\\\"image\\\": {\\\"link\\\": \\\"https://...\\\"}}       - video: {\\\"video\\\": {\\\"link\\\": \\\"https://...\\\"}}       - product: {\\\"product\\\": {\\\"catalog_id\\\": \\\"...\\\", \\\"product_retailer_id\\\": \\\"...\\\"}}     - button: sub_type url or quick_reply       - url: parameters {\\\"text\\\": \\\"Button\\\", \\\"url\\\": \\\"https://...\\\"}       - quick_reply: parameters[] of {\\\"id\\\": \\\"...\\\", \\\"text\\\": \\\"...\\\"}
$body = 'body_example'; // string | Text shown above the carousel. Optional. If omitted and params include a body component, the body will be taken from params.
$quoted_msg_id = 'quoted_msg_id_example'; // string | Quoted message ID (Cloud API)
$chat_id = 'chat_id_example'; // string | Required if phone is not set. Chat ID from the message list. Examples: 12020721369@c.us or 120363046942338209@g.us(group)
$phone = 56; // int | Required if chatId is not set. A phone number starting with the country code. USA example: 12020721369.

try {
    $result = $apiInstance->sendCarousel($token, $params, $body, $quoted_msg_id, $chat_id, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendCarousel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **params** | [**object[]**](../Model/object.md)| Required. Template-like structure (same as sendTemplate params). Must include a CAROUSEL component and its cards.  Structure: - params[] item with type CAROUSEL and cards (2..10) - cards[] item:   - components[] items:     - header: parameters[0] with type image/video/product       - image: {\\\&quot;image\\\&quot;: {\\\&quot;link\\\&quot;: \\\&quot;https://...\\\&quot;}}       - video: {\\\&quot;video\\\&quot;: {\\\&quot;link\\\&quot;: \\\&quot;https://...\\\&quot;}}       - product: {\\\&quot;product\\\&quot;: {\\\&quot;catalog_id\\\&quot;: \\\&quot;...\\\&quot;, \\\&quot;product_retailer_id\\\&quot;: \\\&quot;...\\\&quot;}}     - button: sub_type url or quick_reply       - url: parameters {\\\&quot;text\\\&quot;: \\\&quot;Button\\\&quot;, \\\&quot;url\\\&quot;: \\\&quot;https://...\\\&quot;}       - quick_reply: parameters[] of {\\\&quot;id\\\&quot;: \\\&quot;...\\\&quot;, \\\&quot;text\\\&quot;: \\\&quot;...\\\&quot;} | |
| **body** | **string**| Text shown above the carousel. Optional. If omitted and params include a body component, the body will be taken from params. | [optional] |
| **quoted_msg_id** | **string**| Quoted message ID (Cloud API) | [optional] |
| **chat_id** | **string**| Required if phone is not set. Chat ID from the message list. Examples: 12020721369@c.us or 120363046942338209@g.us(group) | [optional] |
| **phone** | **int**| Required if chatId is not set. A phone number starting with the country code. USA example: 12020721369. | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendContact()`

```php
sendContact($token, $send_contact_request): \OneMsgSdk\Model\MessageSentResponse
```

Send a Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_contact_request = {"phone":"{{testPhone}}","contacts":[{"name":{"formatted_name":"John Doe","first_name":"John","last_name":"Doe","middle_name":"","suffix":"","prefix":""},"birthday":"","addresses":[],"emails":[],"org":{"company":"","department":"","title":""},"phones":[{"phone":"+1234567890","type":"HOME","wa_id":""}],"urls":[]}]}; // \OneMsgSdk\Model\SendContactRequest

try {
    $result = $apiInstance->sendContact($token, $send_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_contact_request** | [**\OneMsgSdk\Model\SendContactRequest**](../Model/SendContactRequest.md)|  | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendCtaUrl()`

```php
sendCtaUrl($token, $send_cta_url_request): \OneMsgSdk\Model\MessageSentResponse
```

Send CTA URL interactive message

Send an interactive message with a single call-to-action URL button.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_cta_url_request = new \OneMsgSdk\Model\SendCtaUrlRequest(); // \OneMsgSdk\Model\SendCtaUrlRequest

try {
    $result = $apiInstance->sendCtaUrl($token, $send_cta_url_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendCtaUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_cta_url_request** | [**\OneMsgSdk\Model\SendCtaUrlRequest**](../Model/SendCtaUrlRequest.md)|  | |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendFile()`

```php
sendFile($token, $body, $filename, $media_id, $media_type, $voice, $caption, $quoted_msg_id, $chat_id, $phone): \OneMsgSdk\Model\MessageSentResponse
```

Send a File

Send a file to an existing chat. (Only if the dialogue has an Open Session).  Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$body = 'body_example'; // string | File source (required unless mediaId is set): - HTTP/HTTPS URL - Base64 data URI
$filename = 'filename_example'; // string | File name with extension (required with body, not with mediaId)
$media_id = 'media_id_example'; // string | WABA media id from uploadMedia (alternative to body)
$media_type = 'media_type_example'; // string | Required when using mediaId
$voice = True; // bool | Native WhatsApp voice note (audio/ogg only)
$caption = 'caption_example'; // string
$quoted_msg_id = 'quoted_msg_id_example'; // string
$chat_id = 'chat_id_example'; // string
$phone = 56; // int

try {
    $result = $apiInstance->sendFile($token, $body, $filename, $media_id, $media_type, $voice, $caption, $quoted_msg_id, $chat_id, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **body** | **string**| File source (required unless mediaId is set): - HTTP/HTTPS URL - Base64 data URI | [optional] |
| **filename** | **string**| File name with extension (required with body, not with mediaId) | [optional] |
| **media_id** | **string**| WABA media id from uploadMedia (alternative to body) | [optional] |
| **media_type** | **string**| Required when using mediaId | [optional] |
| **voice** | **bool**| Native WhatsApp voice note (audio/ogg only) | [optional] |
| **caption** | **string**|  | [optional] |
| **quoted_msg_id** | **string**|  | [optional] |
| **chat_id** | **string**|  | [optional] |
| **phone** | **int**|  | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendFlow()`

```php
sendFlow($token, $body, $flow_id, $flow_token, $flow_cta, $header, $footer, $flow_action, $flow_action_payload, $flow_message_version, $mode, $flow_action_data, $flow_action_screen, $quoted_msg_id, $chat_id, $phone): \OneMsgSdk\Model\MessageSentResponse
```

Send WhatsApp Flow Message

Send Interactive WhatsApp Flow message to an existing chat. (Only if the dialogue has an Open Session).  Only one of two parameters is needed to determine the destination - chatId or phone.  Use this method to send a published WhatsApp Flow as a service (interactive) message.  If the 24-hour window is closed, send a template with a FLOW button via /sendTemplate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$body = 'body_example'; // string | Flow message body text
$flow_id = 'flow_id_example'; // string | Published Flow ID
$flow_token = 'flow_token_example'; // string | Flow token generated by the business
$flow_cta = 'flow_cta_example'; // string | CTA button text
$header = new \OneMsgSdk\Model\SendFlowRequestHeader(); // \OneMsgSdk\Model\SendFlowRequestHeader
$footer = 'footer_example'; // string | Footer text
$flow_action = 'flow_action_example'; // string | Flow action type
$flow_action_payload = array('key' => new \stdClass); // object | Required for flowAction=navigate (screen is required). Ignored for data_exchange. If data is provided, it must be a non-empty object.
$flow_message_version = 'flow_message_version_example'; // string | Flow message version (default \\\"3\\\")
$mode = 'mode_example'; // string | Flow mode (draft or published). If omitted, provider default applies
$flow_action_data = array('key' => new \stdClass); // object | Shortcut for flowActionPayload.data (optional)
$flow_action_screen = 'flow_action_screen_example'; // string | Shortcut for flowActionPayload.screen (optional)
$quoted_msg_id = 'quoted_msg_id_example'; // string | Quoted message ID (Cloud API)
$chat_id = 'chat_id_example'; // string | Required if phone is not set. Chat ID from the message list. Examples: 12020721369@c.us or 120363046942338209@g.us(group)
$phone = 56; // int | Required if chatId is not set. A phone number starting with the country code. USA example: 12020721369.

try {
    $result = $apiInstance->sendFlow($token, $body, $flow_id, $flow_token, $flow_cta, $header, $footer, $flow_action, $flow_action_payload, $flow_message_version, $mode, $flow_action_data, $flow_action_screen, $quoted_msg_id, $chat_id, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **body** | **string**| Flow message body text | |
| **flow_id** | **string**| Published Flow ID | |
| **flow_token** | **string**| Flow token generated by the business | |
| **flow_cta** | **string**| CTA button text | |
| **header** | [**\OneMsgSdk\Model\SendFlowRequestHeader**](../Model/SendFlowRequestHeader.md)|  | [optional] |
| **footer** | **string**| Footer text | [optional] |
| **flow_action** | **string**| Flow action type | [optional] |
| **flow_action_payload** | [**object**](../Model/object.md)| Required for flowAction&#x3D;navigate (screen is required). Ignored for data_exchange. If data is provided, it must be a non-empty object. | [optional] |
| **flow_message_version** | **string**| Flow message version (default \\\&quot;3\\\&quot;) | [optional] |
| **mode** | **string**| Flow mode (draft or published). If omitted, provider default applies | [optional] |
| **flow_action_data** | [**object**](../Model/object.md)| Shortcut for flowActionPayload.data (optional) | [optional] |
| **flow_action_screen** | **string**| Shortcut for flowActionPayload.screen (optional) | [optional] |
| **quoted_msg_id** | **string**| Quoted message ID (Cloud API) | [optional] |
| **chat_id** | **string**| Required if phone is not set. Chat ID from the message list. Examples: 12020721369@c.us or 120363046942338209@g.us(group) | [optional] |
| **phone** | **int**| Required if chatId is not set. A phone number starting with the country code. USA example: 12020721369. | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendList()`

```php
sendList($token, $send_list_request): \OneMsgSdk\Model\MessageSentResponse
```

Send List Message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_list_request = {"phone":"{{testPhone}}","body":"This is a list message","buttonText":"Click me","action":"Action","sections":[{"title":"Section 1","rows":[{"id":"1","title":"Row 1","description":"Description for Row 1"}]}]}; // \OneMsgSdk\Model\SendListRequest

try {
    $result = $apiInstance->sendList($token, $send_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_list_request** | [**\OneMsgSdk\Model\SendListRequest**](../Model/SendListRequest.md)|  | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendLocation()`

```php
sendLocation($token, $lat, $lng, $address, $name, $quoted_msg_id, $chat_id, $phone): \OneMsgSdk\Model\MessageSentResponse
```

Send a Location

Send a location to an existing chat. (Only if the dialogue has an Open Session).  Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$lat = 'lat_example'; // string | Latitude of the location. Example: 45.018337
$lng = 'lng_example'; // string | Longitude of the location. Example: -73.968285
$address = 'address_example'; // string | Address of the location. Only displayed if name is present. Example: 9766 Valley View St., New York, NY 10024
$name = 'name_example'; // string | Name of the location. Example: Facebook HQ
$quoted_msg_id = 'quoted_msg_id_example'; // string | Quoted message ID (Cloud API)
$chat_id = 'chat_id_example'; // string | Required if phone is not set. Chat ID from the message list. Examples: 12020721369@c.us or 120363046942338209@g.us(group)
$phone = 56; // int | Required if chatId is not set. A phone number starting with the country code. USA example: 12020721369.

try {
    $result = $apiInstance->sendLocation($token, $lat, $lng, $address, $name, $quoted_msg_id, $chat_id, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **lat** | **string**| Latitude of the location. Example: 45.018337 | |
| **lng** | **string**| Longitude of the location. Example: -73.968285 | |
| **address** | **string**| Address of the location. Only displayed if name is present. Example: 9766 Valley View St., New York, NY 10024 | [optional] |
| **name** | **string**| Name of the location. Example: Facebook HQ | [optional] |
| **quoted_msg_id** | **string**| Quoted message ID (Cloud API) | [optional] |
| **chat_id** | **string**| Required if phone is not set. Chat ID from the message list. Examples: 12020721369@c.us or 120363046942338209@g.us(group) | [optional] |
| **phone** | **int**| Required if chatId is not set. A phone number starting with the country code. USA example: 12020721369. | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendLocationRequest()`

```php
sendLocationRequest($token, $send_location_request_request): \OneMsgSdk\Model\MessageSentResponse
```

Send Location Request Message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_location_request_request = {"phone":"{{testPhone}}","body":"Text"}; // \OneMsgSdk\Model\SendLocationRequestRequest

try {
    $result = $apiInstance->sendLocationRequest($token, $send_location_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendLocationRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_location_request_request** | [**\OneMsgSdk\Model\SendLocationRequestRequest**](../Model/SendLocationRequestRequest.md)|  | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessage()`

```php
sendMessage($token, $body, $quoted_msg_id, $chat_id, $phone): \OneMsgSdk\Model\MessageSentResponse
```

Send a Message

Send a message to an existing chat. (Only if the dialogue has an Open Session).  The message will be added to the queue for sending and delivered even if the phone  is disconnected from the Internet or authorization is not passed.  Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$body = 'body_example'; // string | Message text, UTF-8 or UTF-16 string with emoji
$quoted_msg_id = 'quoted_msg_id_example'; // string | Message ID to quote/reply to (Cloud API wamid)
$chat_id = 'chat_id_example'; // string | Chat ID in format: phone@c.us (individual) or phone@g.us (group)
$phone = 56; // int | Phone number starting with country code (alternative to chatId)

try {
    $result = $apiInstance->sendMessage($token, $body, $quoted_msg_id, $chat_id, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **body** | **string**| Message text, UTF-8 or UTF-16 string with emoji | |
| **quoted_msg_id** | **string**| Message ID to quote/reply to (Cloud API wamid) | [optional] |
| **chat_id** | **string**| Chat ID in format: phone@c.us (individual) or phone@g.us (group) | [optional] |
| **phone** | **int**| Phone number starting with country code (alternative to chatId) | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendOrderDetails()`

```php
sendOrderDetails($token, $send_order_details_request): \OneMsgSdk\Model\MessageSentResponse
```

Send order details (India payments template)

Send a WhatsApp **order details** payment / invoice message using a pre-approved **Utility** template that has an `ORDER_DETAILS` button.  **India only** (WhatsApp Payments India). Requires: - India WhatsApp Business number - Commerce enabled on the channel (`GET`/`POST /commerce`) - Approved template with an `ORDER_DETAILS` button  Use this method when you need structured fields (`order`, `referenceId`, `currency`, `paymentSettings`). The API appends a template button `sub_type: order_details` and sends via the same path as `POST /sendTemplate`.  Works **outside the 24-hour session window** (template message).  You can also send the same payload yourself with `POST /sendTemplate` by including a button component in `params`:  ```json {   \"type\": \"button\",   \"sub_type\": \"order_details\",   \"index\": 0,   \"parameters\": [{     \"type\": \"action\",     \"action\": {       \"order_details\": {         \"reference_id\": \"order-123\",         \"currency\": \"INR\",         \"order\": { \"status\": \"pending\", \"items\": [], \"subtotal\": { \"offset\": 100, \"value\": 50000 } }       }     }   }] } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_order_details_request = {"phone":919876543210,"template":"order_details_utility","namespace":"your_namespace_uuid","language":{"code":"en"},"referenceId":"order-123","currency":"INR","order":{"status":"pending","items":[{"retailer_id":"SKU-1","name":"Item","amount":{"offset":100,"value":50000},"quantity":1}],"subtotal":{"offset":100,"value":50000}}}; // \OneMsgSdk\Model\SendOrderDetailsRequest

try {
    $result = $apiInstance->sendOrderDetails($token, $send_order_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendOrderDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_order_details_request** | [**\OneMsgSdk\Model\SendOrderDetailsRequest**](../Model/SendOrderDetailsRequest.md)|  | |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPaymentRequest()`

```php
sendPaymentRequest($token, $send_payment_request_request): \OneMsgSdk\Model\MessageSentResponse
```

Send payment request (regional)

Send a regional payment request interactive message (beta scaffold). `region` must be IN, SG, or BR. Payload shape follows Meta regional payments docs; verify on stage before production use. Full regional builders are not implemented yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_payment_request_request = new \OneMsgSdk\Model\SendPaymentRequestRequest(); // \OneMsgSdk\Model\SendPaymentRequestRequest

try {
    $result = $apiInstance->sendPaymentRequest($token, $send_payment_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_payment_request_request** | [**\OneMsgSdk\Model\SendPaymentRequestRequest**](../Model/SendPaymentRequestRequest.md)|  | |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendProduct()`

```php
sendProduct($token, $request_body): \OneMsgSdk\Model\MessageSentResponse
```

Send a Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->sendProduct($token, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendReaction()`

```php
sendReaction($token, $send_reaction_request): \OneMsgSdk\Model\MessageSentResponse
```

Send Reaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_reaction_request = {"phone":"{{testPhone}}","body":"😀","quotedMsgId":"{{lastMessageId}}"}; // \OneMsgSdk\Model\SendReactionRequest

try {
    $result = $apiInstance->sendReaction($token, $send_reaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_reaction_request** | [**\OneMsgSdk\Model\SendReactionRequest**](../Model/SendReactionRequest.md)|  | [optional] |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSticker()`

```php
sendSticker($token, $send_sticker_request): \OneMsgSdk\Model\MessageSentResponse
```

Send sticker message

Send a WhatsApp sticker by mediaId or link URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_sticker_request = new \OneMsgSdk\Model\SendStickerRequest(); // \OneMsgSdk\Model\SendStickerRequest

try {
    $result = $apiInstance->sendSticker($token, $send_sticker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendSticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_sticker_request** | [**\OneMsgSdk\Model\SendStickerRequest**](../Model/SendStickerRequest.md)|  | |

### Return type

[**\OneMsgSdk\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
