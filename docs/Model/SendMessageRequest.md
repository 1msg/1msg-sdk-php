# SendMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | Message text, UTF-8 or UTF-16 string with emoji |
**quoted_msg_id** | **string** | Message ID to quote/reply to (Cloud API wamid) | [optional]
**chat_id** | **string** | Recipient chat ID: phone@c.us, group@g.us, or BSUID@lid | [optional]
**phone** | **int** | Phone number starting with country code (alternative to chatId) | [optional]
**category** | **string** | Optional Direct Send category. Direct Send is in beta: Meta has not enabled it on every business portfolio. &#x60;utility&#x60; or &#x60;authentication&#x60; enables it. &#x60;authentication&#x60; is part of that beta and is not recommended. Omit or &#x60;service&#x60; keeps a normal service message (and the marketing auto-template outside the 24-hour window). &#x60;marketing&#x60; is rejected. | [optional]
**direct_send** | [**\OneMsgSdk\Model\SendMessageRequestDirectSend**](SendMessageRequestDirectSend.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
