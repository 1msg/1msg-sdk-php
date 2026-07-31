# OneMsgSdk\UsersApi

Block, unblock, and list blocked WhatsApp users

All URIs are relative to https://api.1msg.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blockUser()**](UsersApi.md#blockUser) | **POST** /blockUser | Block WhatsApp user |
| [**listBlockedUsers()**](UsersApi.md#listBlockedUsers) | **GET** /blockedUsers | List blocked WhatsApp users |
| [**unblockUser()**](UsersApi.md#unblockUser) | **POST** /unblockUser | Unblock WhatsApp user |


## `blockUser()`

```php
blockUser($token, $block_user_request): \OneMsgSdk\Model\SuccessResponse
```

Block WhatsApp user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$block_user_request = new \OneMsgSdk\Model\BlockUserRequest(); // \OneMsgSdk\Model\BlockUserRequest

try {
    $result = $apiInstance->blockUser($token, $block_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->blockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **block_user_request** | [**\OneMsgSdk\Model\BlockUserRequest**](../Model/BlockUserRequest.md)|  | |

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

## `listBlockedUsers()`

```php
listBlockedUsers($token): \OneMsgSdk\Model\ListBlockedUsers200Response
```

List blocked WhatsApp users

Returns users currently blocked on this WhatsApp channel (WABA `GET /block_users`). Same channel token auth as `blockUser` / `unblockUser`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->listBlockedUsers($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listBlockedUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgSdk\Model\ListBlockedUsers200Response**](../Model/ListBlockedUsers200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockUser()`

```php
unblockUser($token, $block_user_request): \OneMsgSdk\Model\SuccessResponse
```

Unblock WhatsApp user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$block_user_request = new \OneMsgSdk\Model\BlockUserRequest(); // \OneMsgSdk\Model\BlockUserRequest

try {
    $result = $apiInstance->unblockUser($token, $block_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->unblockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **block_user_request** | [**\OneMsgSdk\Model\BlockUserRequest**](../Model/BlockUserRequest.md)|  | |

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
