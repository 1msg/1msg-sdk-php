# OneMsgChatApi\FlowsApi

WhatsApp Flows (interactive forms)

All URIs are relative to https://api.1msg.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFlows()**](FlowsApi.md#createFlows) | **POST** /flows | Create Flow |
| [**createFlowsFlowIdDeprecate()**](FlowsApi.md#createFlowsFlowIdDeprecate) | **POST** /flows/{flowId}/deprecate | Deprecate Flow |
| [**createFlowsFlowIdPublish()**](FlowsApi.md#createFlowsFlowIdPublish) | **POST** /flows/{flowId}/publish | Publish Flow |
| [**deleteFlowsFlowId()**](FlowsApi.md#deleteFlowsFlowId) | **DELETE** /flows/{flowId} | Delete Flow |
| [**getFlowsFlowId()**](FlowsApi.md#getFlowsFlowId) | **GET** /flows/{flowId} | Get Flow Details |
| [**getFlowsFlowIdPreview()**](FlowsApi.md#getFlowsFlowIdPreview) | **GET** /flows/{flowId}/preview | Preview Flow |
| [**getWhatsappBusinessEncryption()**](FlowsApi.md#getWhatsappBusinessEncryption) | **GET** /whatsapp_business_encryption | Get business encryption public key |
| [**listFlows()**](FlowsApi.md#listFlows) | **GET** /flows | List Flows |
| [**patchFlowsFlowIdAssets()**](FlowsApi.md#patchFlowsFlowIdAssets) | **PATCH** /flows/{flowId}/assets | Update Flow Structure |
| [**patchFlowsFlowIdMetadata()**](FlowsApi.md#patchFlowsFlowIdMetadata) | **PATCH** /flows/{flowId}/metadata | Update Flow Metadata |
| [**setWhatsappBusinessEncryption()**](FlowsApi.md#setWhatsappBusinessEncryption) | **POST** /whatsapp_business_encryption | Set business encryption public key |


## `createFlows()`

```php
createFlows($token, $waba_account_id): \OneMsgChatApi\Model\CreateGroups200Response
```

Create Flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$waba_account_id = {{wabaAccountId}}; // string

try {
    $result = $apiInstance->createFlows($token, $waba_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->createFlows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **waba_account_id** | **string**|  | [optional] |

### Return type

[**\OneMsgChatApi\Model\CreateGroups200Response**](../Model/CreateGroups200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFlowsFlowIdDeprecate()`

```php
createFlowsFlowIdDeprecate($flow_id, $token, $waba_account_id): array<string,mixed>
```

Deprecate Flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$token = 'token_example'; // string | JWT token or API key for authorization
$waba_account_id = {{wabaAccountId}}; // string

try {
    $result = $apiInstance->createFlowsFlowIdDeprecate($flow_id, $token, $waba_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->createFlowsFlowIdDeprecate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **token** | **string**| JWT token or API key for authorization | |
| **waba_account_id** | **string**|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFlowsFlowIdPublish()`

```php
createFlowsFlowIdPublish($flow_id, $token, $waba_account_id): array<string,mixed>
```

Publish Flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$token = 'token_example'; // string | JWT token or API key for authorization
$waba_account_id = {{wabaAccountId}}; // string

try {
    $result = $apiInstance->createFlowsFlowIdPublish($flow_id, $token, $waba_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->createFlowsFlowIdPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **token** | **string**| JWT token or API key for authorization | |
| **waba_account_id** | **string**|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFlowsFlowId()`

```php
deleteFlowsFlowId($flow_id, $token, $waba_account_id): \OneMsgChatApi\Model\DeleteFlowsFlowId200Response
```

Delete Flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$token = 'token_example'; // string | JWT token or API key for authorization
$waba_account_id = {{wabaAccountId}}; // string

try {
    $result = $apiInstance->deleteFlowsFlowId($flow_id, $token, $waba_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->deleteFlowsFlowId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **token** | **string**| JWT token or API key for authorization | |
| **waba_account_id** | **string**|  | [optional] |

### Return type

[**\OneMsgChatApi\Model\DeleteFlowsFlowId200Response**](../Model/DeleteFlowsFlowId200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlowsFlowId()`

```php
getFlowsFlowId($flow_id, $token, $waba_account_id): \OneMsgChatApi\Model\CreateGroups200Response
```

Get Flow Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$token = 'token_example'; // string | JWT token or API key for authorization
$waba_account_id = {{wabaAccountId}}; // string

try {
    $result = $apiInstance->getFlowsFlowId($flow_id, $token, $waba_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getFlowsFlowId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **token** | **string**| JWT token or API key for authorization | |
| **waba_account_id** | **string**|  | [optional] |

### Return type

[**\OneMsgChatApi\Model\CreateGroups200Response**](../Model/CreateGroups200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlowsFlowIdPreview()`

```php
getFlowsFlowIdPreview($flow_id, $token, $waba_account_id): array<string,mixed>
```

Preview Flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$token = 'token_example'; // string | JWT token or API key for authorization
$waba_account_id = {{wabaAccountId}}; // string

try {
    $result = $apiInstance->getFlowsFlowIdPreview($flow_id, $token, $waba_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getFlowsFlowIdPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **token** | **string**| JWT token or API key for authorization | |
| **waba_account_id** | **string**|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsappBusinessEncryption()`

```php
getWhatsappBusinessEncryption($token): \OneMsgChatApi\Model\GetWhatsappBusinessEncryption200Response
```

Get business encryption public key

Retrieve the WhatsApp business public key and signature status for this channel's phone number. Required before publishing or sending Flows that use data encryption.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->getWhatsappBusinessEncryption($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getWhatsappBusinessEncryption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgChatApi\Model\GetWhatsappBusinessEncryption200Response**](../Model/GetWhatsappBusinessEncryption200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFlows()`

```php
listFlows($token, $waba_account_id): \OneMsgChatApi\Model\ListFlows200Response
```

List Flows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$waba_account_id = {{wabaAccountId}}; // string

try {
    $result = $apiInstance->listFlows($token, $waba_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->listFlows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **waba_account_id** | **string**|  | [optional] |

### Return type

[**\OneMsgChatApi\Model\ListFlows200Response**](../Model/ListFlows200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchFlowsFlowIdAssets()`

```php
patchFlowsFlowIdAssets($flow_id, $token, $waba_account_id): \OneMsgChatApi\Model\PatchFlowsFlowIdAssets200Response
```

Update Flow Structure

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$token = 'token_example'; // string | JWT token or API key for authorization
$waba_account_id = {{wabaAccountId}}; // string

try {
    $result = $apiInstance->patchFlowsFlowIdAssets($flow_id, $token, $waba_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->patchFlowsFlowIdAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **token** | **string**| JWT token or API key for authorization | |
| **waba_account_id** | **string**|  | [optional] |

### Return type

[**\OneMsgChatApi\Model\PatchFlowsFlowIdAssets200Response**](../Model/PatchFlowsFlowIdAssets200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchFlowsFlowIdMetadata()`

```php
patchFlowsFlowIdMetadata($flow_id, $token, $waba_account_id): array<string,mixed>
```

Update Flow Metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$token = 'token_example'; // string | JWT token or API key for authorization
$waba_account_id = {{wabaAccountId}}; // string

try {
    $result = $apiInstance->patchFlowsFlowIdMetadata($flow_id, $token, $waba_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->patchFlowsFlowIdMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **token** | **string**| JWT token or API key for authorization | |
| **waba_account_id** | **string**|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWhatsappBusinessEncryption()`

```php
setWhatsappBusinessEncryption($token, $set_whatsapp_business_encryption_request): \OneMsgChatApi\Model\CreateCommerce200Response
```

Set business encryption public key

Upload and sign a 2048-bit RSA business public key (PEM) for this channel's phone number. Meta requires a signed key before Flow publish/send. Only one active key per number; a new upload replaces the previous key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$set_whatsapp_business_encryption_request = new \OneMsgChatApi\Model\SetWhatsappBusinessEncryptionRequest(); // \OneMsgChatApi\Model\SetWhatsappBusinessEncryptionRequest

try {
    $result = $apiInstance->setWhatsappBusinessEncryption($token, $set_whatsapp_business_encryption_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->setWhatsappBusinessEncryption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **set_whatsapp_business_encryption_request** | [**\OneMsgChatApi\Model\SetWhatsappBusinessEncryptionRequest**](../Model/SetWhatsappBusinessEncryptionRequest.md)|  | |

### Return type

[**\OneMsgChatApi\Model\CreateCommerce200Response**](../Model/CreateCommerce200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
