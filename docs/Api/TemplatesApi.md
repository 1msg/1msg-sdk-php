# OneMsgSdk\TemplatesApi

Get and manage message templates

All URIs are relative to https://api.1msg.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTemplate()**](TemplatesApi.md#addTemplate) | **POST** /addTemplate | Create message template |
| [**listTemplates()**](TemplatesApi.md#listTemplates) | **GET** /templates | Get templates list |
| [**removeTemplate()**](TemplatesApi.md#removeTemplate) | **POST** /removeTemplate | Remove message template |
| [**sendTemplate()**](TemplatesApi.md#sendTemplate) | **POST** /sendTemplate | Send Template Message |


## `addTemplate()`

```php
addTemplate($token, $add_template_request): \OneMsgSdk\Model\AddTemplate200Response
```

Create message template

Create a WABA message template (`name`, `category`, `language`, `components`). After create, Meta reviews the template; list it with `GET /templates`.  Authentication OTP templates (`category: AUTHENTICATION`, copy-code / OTP button) can later be sent only to a phone number. Meta does not accept a BSUID recipient for them (error 131062). If the recipient is known only by BSUID — for example they use a username and their phone number is not in your Business Portfolio — that template cannot be sent.  To ask a BSUID user for their phone number, add a `REQUEST_CONTACT_INFO` button on a `UTILITY` or `MARKETING` template. Do not send `text` on that button — WhatsApp sets the label (and rejects a custom one). The button also has no send-time parameters: `POST /sendTemplate` does not take a button component for it. Inside an open 24-hour window, call `POST /sendContactInfo` instead of a template.  When the user shares the number, the inbound webhook is a `contacts` message with `origin: contact_request`. The phone is stored on that BSUID automatically. See `POST /sendContactInfo`.  ```json {   \"name\": \"request_phone\",   \"category\": \"UTILITY\",   \"language\": \"en_US\",   \"components\": [     {       \"type\": \"BODY\",       \"text\": \"Please share your phone number so we can continue.\"     },     {       \"type\": \"BUTTONS\",       \"buttons\": [{ \"type\": \"REQUEST_CONTACT_INFO\" }]     }   ] } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$add_template_request = {"name":"hello_world","category":"UTILITY","language":"en_US","components":[{"type":"BODY","text":"Hello {{1}}"}]}; // \OneMsgSdk\Model\AddTemplateRequest

try {
    $result = $apiInstance->addTemplate($token, $add_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->addTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **add_template_request** | [**\OneMsgSdk\Model\AddTemplateRequest**](../Model/AddTemplateRequest.md)|  | [optional] |

### Return type

[**\OneMsgSdk\Model\AddTemplate200Response**](../Model/AddTemplate200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplates()`

```php
listTemplates($token, $limit, $offset, $sort): \OneMsgSdk\Model\ListTemplates200Response
```

Get templates list

List message templates. Paginate with `limit` / `offset`; sort by `id`, `name`, or `status`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$limit = 56; // int
$offset = 56; // int
$sort = 'sort_example'; // string | Sort field (`id`, `name`, or `status`)

try {
    $result = $apiInstance->listTemplates($token, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **limit** | **int**|  | [optional] |
| **offset** | **int**|  | [optional] |
| **sort** | **string**| Sort field (&#x60;id&#x60;, &#x60;name&#x60;, or &#x60;status&#x60;) | [optional] |

### Return type

[**\OneMsgSdk\Model\ListTemplates200Response**](../Model/ListTemplates200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTemplate()`

```php
removeTemplate($token, $remove_template_request): array<string,mixed>
```

Remove message template

Delete a message template by `name` (all language versions of that name).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$remove_template_request = {"name":"hello_world"}; // \OneMsgSdk\Model\RemoveTemplateRequest

try {
    $result = $apiInstance->removeTemplate($token, $remove_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->removeTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **remove_template_request** | [**\OneMsgSdk\Model\RemoveTemplateRequest**](../Model/RemoveTemplateRequest.md)|  | |

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

## `sendTemplate()`

```php
sendTemplate($token, $send_template_request): array<string,mixed>
```

Send Template Message

Send a WhatsApp **template** message (works outside the 24-hour session window).  Use this tool — not `send_message` — when the 24h session is closed.  `params` MUST be Cloud API **component objects**, never a flat list of strings and never the old On-Prem `hsm` / `localizable_params` format.  Example body variable `{{1}}`:  ```json {   \"type\": \"body\",   \"parameters\": [{ \"type\": \"text\", \"text\": \"Ivan\" }] } ```  Do not send `\"type\": \"hsm\"` and do not send `params: [\"Ivan\", \"123\"]`.  Supported `params` button `sub_type` values include: `url`, `quick_reply`, `copy_code` / `coupon_code`, `catalog`, `flow`, `limited_time_offer`, and **`order_details`** (WhatsApp Payments **India only** — requires an approved Utility template with an ORDER_DETAILS button).  Convenience wrapper with structured fields: `POST /sendOrderDetails`.  Authentication OTP templates (category `AUTHENTICATION`, or a template with an OTP / copy-code button) can only be sent to a phone number (`phone` or a phone `chatId`). Meta rejects a BSUID `recipient` for these templates with error 131062. If the recipient is known only by BSUID — for example they use a username and their phone number is not in your Business Portfolio — the template cannot be sent.  A `REQUEST_CONTACT_INFO` button (UTILITY or MARKETING only) has no send-time parameters. Do not add a button component for it in `params`, and do not send button text — WhatsApp sets that label on the template. Create the button with `POST /addTemplate` as `{ \"type\": \"REQUEST_CONTACT_INFO\" }` with no `text`. Inside an open 24-hour window, `POST /sendContactInfo` asks for the number without a template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$send_template_request = {"template":"test_buttons_2","language":{"policy":"deterministic","code":"ru"},"namespace":"41123797_e45e_4f06_a2fa_443b27c6f5ec","phone":"{{testPhone}}","params":[{"type":"body","parameters":[{"type":"text","text":"Ivan"}]}]}; // \OneMsgSdk\Model\SendTemplateRequest

try {
    $result = $apiInstance->sendTemplate($token, $send_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->sendTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **send_template_request** | [**\OneMsgSdk\Model\SendTemplateRequest**](../Model/SendTemplateRequest.md)|  | [optional] |

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
