# SendProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone** | **string** | Recipient phone with country code. Use phone or chatId. | [optional]
**chat_id** | **string** | Recipient chat ID (&#x60;phone@c.us&#x60;, group &#x60;@g.us&#x60;, or BSUID &#x60;@lid&#x60;). Use phone or chatId. | [optional]
**quoted_msg_id** | **string** |  | [optional]
**body** | **string** | Optional message text shown with the product | [optional]
**footer** | **string** |  | [optional]
**header** | **string** | Text header (product list only) | [optional]
**action** | **array<string,mixed>** | Catalog action (&#x60;catalog_id&#x60; + &#x60;product_retailer_id&#x60;, or &#x60;sections&#x60; for a list) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
