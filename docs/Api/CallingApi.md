# OneMsgSdk\CallingApi

WhatsApp Calling API (beta) — VoIP **signaling** proxy.  1msg does **not** host media, store call history, or store recordings. You need your own WebRTC or SIP stack.  ### Prerequisites - Meta Calling enabled on the number (Cloud API; not COEX) - Paid channel — trial / &#x60;subscriptionBlocked&#x60; → **403** plain text - Webhook URL configured (&#x60;POST /webhook&#x60;) for &#x60;calls&#x60; events  ### Inbound (user → business) 1. Webhook &#x60;type&#x3D;calls&#x60;, &#x60;event&#x3D;connect&#x60; — take &#x60;call_id&#x60; + SDP **offer** 2. Optional: &#x60;POST /initiateCall&#x60; &#x60;action&#x3D;pre_accept&#x60; + WebRTC **answer** SDP 3. &#x60;action&#x3D;accept&#x60; + WebRTC **answer** SDP, or &#x60;action&#x3D;reject&#x60; 4. Later &#x60;event&#x3D;terminate&#x60;, or &#x60;action&#x3D;terminate&#x60; to hang up  Answer within ~**30–60s** or Meta ends as unanswered.  **Critical:** &#x60;accept&#x60; / &#x60;pre_accept&#x60; need a **WebRTC-generated SDP answer**. Do **not** echo Meta&#39;s offer. Postman/curl alone cannot establish real media.  ### Outbound (business → user) 1. Send Call Permission Request (CPR) — template or interactive 2. Wait for permission reply on the **messages** webhook (&#x60;call_permission_reply&#x60;) 3. &#x60;POST /initiateCall&#x60; &#x60;action&#x3D;connect&#x60; + business SDP **offer** 4. Apply Meta&#39;s SDP **answer** from the &#x60;calls&#x60; connect webhook  Meta limits (summary): permission ~7 days; up to 5 calls / 24h / user; max 2 CPR / 7 days; auto-revoke after 4 unanswered.  ### Webhooks (&#x60;type&#x3D;calls&#x60;) Passthrough of Meta &#x60;field&#x3D;calls&#x60; plus &#x60;type&#x60;, &#x60;instanceId&#x60;. Events: connect (offer or answer SDP), statuses (&#x60;RINGING&#x60; / &#x60;ACCEPTED&#x60; / &#x60;REJECTED&#x60;), terminate. CPR replies use the messages path, not &#x60;type&#x3D;calls&#x60;.  See operations below for request bodies and examples.

All URIs are relative to https://api.1msg.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCallingSettings()**](CallingApi.md#getCallingSettings) | **GET** /callingSettings | Get calling settings |
| [**initiateCall()**](CallingApi.md#initiateCall) | **POST** /initiateCall | Call action (connect / pre_accept / accept / reject / terminate) |
| [**updateCallingSettings()**](CallingApi.md#updateCallingSettings) | **POST** /callingSettings | Update calling settings |


## `getCallingSettings()`

```php
getCallingSettings($token): \OneMsgSdk\Model\CallingSettings
```

Get calling settings

Return WhatsApp Calling API settings for this channel (beta).  Proxies upstream `GET /calling/settings`.  **Prerequisites** - Number must be eligible for Meta Calling (Cloud API; not COEX) - Trial / `subscriptionBlocked` channels receive **403** plain text - You need your own WebRTC or SIP stack; 1msg is a **signaling proxy** only   and does **not** store call history or recordings  See the **Calling** tag overview for inbound/outbound flows and webhooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\CallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->getCallingSettings($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallingApi->getCallingSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgSdk\Model\CallingSettings**](../Model/CallingSettings.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateCall()`

```php
initiateCall($token, $initiate_call_request): \OneMsgSdk\Model\InitiateCallResponse
```

Call action (connect / pre_accept / accept / reject / terminate)

Perform a WhatsApp Calling action (beta).  Proxies upstream `POST /calling/calls`. Despite the historical path name `/initiateCall`, this endpoint handles **all** call actions:  | action | Use | Required | |--------|-----|----------| | `connect` | Outbound business → user | `to` + `session` (`sdp_type: offer`) | | `pre_accept` | Inbound (optional, reduces audio clipping) | `call_id` + `session` (`sdp_type: answer`) | | `accept` | Inbound answer | `call_id` + `session` (`sdp_type: answer`) | | `reject` | Decline inbound | `call_id` | | `terminate` | Hang up | `call_id` |  **SDP / media (critical)** - `accept` / `pre_accept` require a **WebRTC-generated SDP answer**. - Do **not** send Meta's offer SDP back as the answer. - Postman (or curl) alone **cannot** establish real media — you need a   WebRTC or SIP stack. 1msg only proxies signaling.  Answer within ~**30–60 seconds** of an inbound `connect` webhook or Meta terminates as unanswered. Common Meta errors include Calling not enabled (`138000`), no permission (`138006`), SDP validation failures.  **Outbound** requires a prior Call Permission Request (CPR) acceptance. See the **Calling** tag overview for the full outbound flow and CPR limits.  Trial / `subscriptionBlocked` → **403** plain text. Upstream failures often return HTTP 200 with `{ \"response\": { \"error\": \"...\" } }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\CallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$initiate_call_request = {"messaging_product":"whatsapp","to":"12185552828","action":"connect","biz_opaque_callback_data":"order-123","session":{"sdp_type":"offer","sdp":"[REPLACE_WITH_WEBRTC_SDP]"}}; // \OneMsgSdk\Model\InitiateCallRequest

try {
    $result = $apiInstance->initiateCall($token, $initiate_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallingApi->initiateCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **initiate_call_request** | [**\OneMsgSdk\Model\InitiateCallRequest**](../Model/InitiateCallRequest.md)|  | |

### Return type

[**\OneMsgSdk\Model\InitiateCallResponse**](../Model/InitiateCallResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCallingSettings()`

```php
updateCallingSettings($token, $calling_settings): \OneMsgSdk\Model\UpdateCallingSettings200Response
```

Update calling settings

Enable, disable, or update WhatsApp Calling settings (beta).  Proxies upstream `POST /calling/settings`. Body is forwarded as-is (1msg does not validate fields).  **Common fields under `calling`** - `status` (`ENABLED` | `DISABLED`) — required to turn calling on/off - `call_icon_visibility` (`DEFAULT` | `DISABLE_ALL`) — optional - `callback_permission_status` (`ENABLED` | `DISABLED`) — optional;   when enabled, inbound user calls grant callback permission - `call_hours` — optional hours / timezone object - `sip` — optional SIP trunk; when SIP is ENABLED, Graph call actions and   calling webhooks are not used - `srtp_key_exchange_protocol` (`DTLS` | `SDES`) — SDES only with SIP - `video.status` — optional  Meta may accept only one feature group per request — prefer focused updates (e.g. enable status first, then SIP).  Trial / `subscriptionBlocked` → **403** plain text.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\CallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$calling_settings = {"calling":{"status":"ENABLED","call_icon_visibility":"DEFAULT","callback_permission_status":"ENABLED"}}; // \OneMsgSdk\Model\CallingSettings

try {
    $result = $apiInstance->updateCallingSettings($token, $calling_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallingApi->updateCallingSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **calling_settings** | [**\OneMsgSdk\Model\CallingSettings**](../Model/CallingSettings.md)|  | |

### Return type

[**\OneMsgSdk\Model\UpdateCallingSettings200Response**](../Model/UpdateCallingSettings200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
