# OneMsgSdk\CatalogApi

Catalog and cart commerce settings (&#x60;GET&#x60;/&#x60;POST /commerce&#x60;)

All URIs are relative to https://api.1msg.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCommerce()**](CatalogApi.md#createCommerce) | **POST** /commerce | Set Commerce Settings |
| [**getCommerce()**](CatalogApi.md#getCommerce) | **GET** /commerce | Get Commerce Settings |


## `createCommerce()`

```php
createCommerce($token, $create_commerce_request): \OneMsgSdk\Model\CreateCommerce200Response
```

Set Commerce Settings

Update catalog/cart commerce settings via the `params` object.  - `params.is_catalog_visible` — show catalog storefront icon (`true`) or hide it (`false`). - `params.is_cart_enabled` — enable cart (`true`) or disable it (`false`).  Blocked when the channel subscription limit is exceeded. Requires a commerce-capable channel (Cloud Functions `/commerceWAV2`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization
$create_commerce_request = {"params":{"is_cart_enabled":true,"is_catalog_visible":true}}; // \OneMsgSdk\Model\CreateCommerceRequest

try {
    $result = $apiInstance->createCommerce($token, $create_commerce_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->createCommerce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |
| **create_commerce_request** | [**\OneMsgSdk\Model\CreateCommerceRequest**](../Model/CreateCommerceRequest.md)|  | |

### Return type

[**\OneMsgSdk\Model\CreateCommerce200Response**](../Model/CreateCommerce200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerce()`

```php
getCommerce($token): \OneMsgSdk\Model\GetCommerce200ResponseInner[]
```

Get Commerce Settings

Returns catalog/cart commerce settings for the channel.  - `is_catalog_visible` — show catalog storefront icon (`true`) or hide it (`false`). - `is_cart_enabled` — enable cart (`true`) or disable it (`false`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgSdk\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->getCommerce($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCommerce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| JWT token or API key for authorization | |

### Return type

[**\OneMsgSdk\Model\GetCommerce200ResponseInner[]**](../Model/GetCommerce200ResponseInner.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
