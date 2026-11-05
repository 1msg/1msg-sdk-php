# OneMsgSdk\WebhooksApi

Client webhook URL configuration (&#x60;GET&#x60;/&#x60;POST /webhook&#x60;).  Auto-disable is **per URL**, not per channel. Prefer &#x60;webhookStatuses&#x60; on &#x60;GET /webhook&#x60; / &#x60;GET /settings&#x60;. Top-level &#x60;haveDisabledWebhooks&#x60; means at least one configured URL is sticky-disabled; live URLs still receive events.

All URIs are relative to https://api.1msg.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWebhook()**](WebhooksApi.md#getWebhook) | **GET** /webhook | Get webhook URL |
| [**setWebhook()**](WebhooksApi.md#setWebhook) | **POST** /webhook | Set webhook URL |


## `getWebhook()`

```php
getWebhook($token): \OneMsgSdk\Model\GetWebhook200Response
```

Get webhook URL

Return the webhook URL(s) currently configured for this channel, plus delivery status for each URL.  `webhookUrl` is a string when a single URL is set, an array of strings when multiple URLs are configured, or `null` if none is set.  **Prefer `webhookStatuses`.** The circuit breaker is per URL, not per channel. If 1 of 4 URLs is sticky-disabled, that URL is skipped; the other three still receive events. Send/receive are not affected.  Channel-level `haveDisabledWebhooks`, `circuitState`, `reason`, `fails`, `trips`, and timestamps are a compatibility summary of **one** URL (the first sticky-disabled URL, else the first configured URL). They are not \"the channel is dead\".  - `haveDisabledWebhooks` — `true` when **at least one** URL in `webhookUrl` is   sticky auto-disabled. Live URLs still get events. - `circuitState` — compressed scalar for that same primary URL:   `ok` | `degraded` | `open` | `half_open` | `disabled`. - `disabledWebhooks` — currently configured URLs that are sticky-disabled   (subset of `webhookUrl`). - `webhookStatuses` — one row per currently configured URL. Use this array   to see which endpoints are live vs skipped. - `fails` / `trips` / `firstFailAt` — **diagnostics for support**, not product   UI. `fails` = failures in a rolling ~10 minute window (not lifetime).   `trips` = failed recovery probes on the 15 min → 1 h → 6 h schedule (sticky   disable after 3). Clients can ignore these and use `webhookStatuses` +   `disabledWebhooks` only.  Sticky disable skips delivery; it does not unconfigure the URL (it stays in `webhookUrl`). Re-enable with `POST /webhook` or `POST /settings`. Those endpoints **replace** the whole list — with multiple URLs, send the full array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->getWebhook($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgSdk\Model\GetWebhook200Response**](../Model/GetWebhook200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWebhook()`

```php
setWebhook($token, $set_webhook_request): \OneMsgSdk\Model\SetWebhook200Response
```

Set webhook URL

Set the client webhook URL that receives inbound events for this channel.  **Replaces** the stored webhook list (it does not append). To deliver the same events to several endpoints, pass an array in `webhookUrl` (max 5) or use `POST /settings`. With several URLs already configured, posting only the disabled URL **drops the others** — send the complete array to re-enable one of many.  Incoming payloads include messages, delivery ACKs, group updates, coexistence echoes, and calling events. WhatsApp Calling payloads (`type: \"calls\"`) are documented under the **Calling** tag. Call permission replies arrive on the normal messages path (`call_permission_reply`).  Repeating `POST /webhook` with the same URL(s) clears an auto-disable (self-serve re-enable). Send/receive are not affected by webhook auto-disable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$set_webhook_request = {"webhookUrl":"https://example.com/webhook"}; // \OneMsgSdk\Model\SetWebhookRequest

try {
    $result = $apiInstance->setWebhook($token, $set_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->setWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **set_webhook_request** | [**\OneMsgSdk\Model\SetWebhookRequest**](../Model/SetWebhookRequest.md)|  | |

### Return type

[**\OneMsgSdk\Model\SetWebhook200Response**](../Model/SetWebhook200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
