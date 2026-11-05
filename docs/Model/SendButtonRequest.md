# SendButtonRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone** | **string** | Recipient phone with country code. Use phone or chatId. | [optional]
**chat_id** | **string** | Recipient chat ID (&#x60;phone@c.us&#x60;, group &#x60;@g.us&#x60;, or BSUID &#x60;@lid&#x60;). Use phone or chatId. | [optional]
**quoted_msg_id** | **string** | Optional Cloud API wamid to quote | [optional]
**body** | **string** |  | [optional]
**footer** | **string** |  | [optional]
**header** | **array<string,mixed>** | Optional interactive header (text/image/video/document) | [optional]
**buttons** | **object[]** | Legacy alias for sections (&#x60;[{id,title}]&#x60;) | [optional]
**sections** | [**\OneMsgSdk\Model\SendButtonRequestSectionsInner[]**](SendButtonRequestSectionsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
