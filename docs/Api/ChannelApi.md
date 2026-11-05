# OneMsgSdk\ChannelApi

Channel status and automation settings

All URIs are relative to https://api.1msg.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSettings()**](ChannelApi.md#createSettings) | **POST** /settings | Update channel settings |
| [**getConversationalAutomation()**](ChannelApi.md#getConversationalAutomation) | **GET** /conversationalAutomation | Get conversational automation settings |
| [**getStatus()**](ChannelApi.md#getStatus) | **GET** /status | Get channel status |
| [**listSettings()**](ChannelApi.md#listSettings) | **GET** /settings | Get channel settings |
| [**setConversationalAutomation()**](ChannelApi.md#setConversationalAutomation) | **POST** /conversationalAutomation | Set conversational automation settings |


## `createSettings()`

```php
createSettings($token, $create_settings_request): array<string,mixed>
```

Update channel settings

Update channel settings. Only send fields you want to change.  `webhookUrl` **replaces** the stored list (one URL string, or up to 5 URLs as an array). Passing an empty value clears webhooks. Repeating the same URL(s) also clears a sticky auto-disable. With several URLs, send the complete array to re-enable one of them — omitting a URL removes it from the channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$create_settings_request = {"webhookUrl":"https://example.com/webhook","ackNotificationsOn":true}; // \OneMsgSdk\Model\CreateSettingsRequest

try {
    $result = $apiInstance->createSettings($token, $create_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->createSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **create_settings_request** | [**\OneMsgSdk\Model\CreateSettingsRequest**](../Model/CreateSettingsRequest.md)|  | |

### Return type

**array<string,mixed>**

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationalAutomation()`

```php
getConversationalAutomation($token): \OneMsgSdk\Model\ConversationalAutomation
```

Get conversational automation settings

Get WhatsApp conversational components for the channel (welcome message, ice-breaker prompts, and slash commands).  Proxies Meta/360dialog `GET /conversational_automation`.  When `enable_welcome_message` is true and a user opens chat for the first time, Meta delivers a webhook message with `type: request_welcome`. The inbound formatter exposes that as `type: \"request_welcome\"` and `meta.request_welcome: true` so your webhook can send a custom welcome reply.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->getConversationalAutomation($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->getConversationalAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgSdk\Model\ConversationalAutomation**](../Model/ConversationalAutomation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatus()`

```php
getStatus($token): \OneMsgSdk\Model\GetStatus200Response
```

Get channel status

Return WhatsApp Cloud API connection status for this channel (`connected` when the number can send). May include `accountStatus`, messaging limit, and MM Lite availability.  Optional `health_status_warning` appears only when Meta Graph health could not be loaded and a soft `connected` response is returned. Omitted on the normal path and when health details are not applicable for the channel — never an internal provider/transport name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->getStatus($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgSdk\Model\GetStatus200Response**](../Model/GetStatus200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSettings()`

```php
listSettings($token): \OneMsgSdk\Model\ListSettings200Response
```

Get channel settings

Return channel settings: webhook URL(s), delivery flags, and analytics toggles.  Auto-disable / circuit state matches `GET /webhook`. **Prefer `webhookStatuses`** (one row per configured URL). The breaker is per URL, not per channel.  Channel-level `haveDisabledWebhooks` is `true` when **at least one** URL in `webhookUrl` is sticky auto-disabled — not \"the channel is dead\". Live URLs still receive events. Top-level `circuitState` / `reason` / `fails` / `trips` are a compatibility summary of one URL (first sticky-disabled, else first configured).  This is the same `GET /settings` endpoint as the REST API (previously missing from MCP).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->listSettings($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->listSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgSdk\Model\ListSettings200Response**](../Model/ListSettings200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setConversationalAutomation()`

```php
setConversationalAutomation($token, $conversational_automation): array<string,mixed>
```

Set conversational automation settings

Update WhatsApp conversational components.  Allowed body fields (others are ignored): - `enable_welcome_message` (boolean) - `prompts` (string[], max 4, each ≤ 80 chars) - `commands` (`{ command_name, command_description }[]`)  Proxies Meta/360dialog `POST /conversational_automation`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$conversational_automation = {"enable_welcome_message":true,"prompts":["How can I help?"],"commands":[{"command_name":"help","command_description":"Get support options"}]}; // \OneMsgSdk\Model\ConversationalAutomation

try {
    $result = $apiInstance->setConversationalAutomation($token, $conversational_automation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->setConversationalAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **conversational_automation** | [**\OneMsgSdk\Model\ConversationalAutomation**](../Model/ConversationalAutomation.md)|  | |

### Return type

**array<string,mixed>**

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
