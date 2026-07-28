# SendOrderDetailsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone** | **int** | Recipient phone (India E.164 digits, no +). Use phone or chatId. | [optional]
**chat_id** | **string** | Recipient chatId (e.g. phone@c.us). Use phone or chatId. | [optional]
**template** | **string** | Approved Utility template name that includes an ORDER_DETAILS button |
**namespace** | **string** | Template namespace from the channel / template list |
**language** | [**\OneMsgChatApi\Model\SendOrderDetailsRequestLanguage**](SendOrderDetailsRequestLanguage.md) |  |
**params** | **array<string,mixed>[]** | Extra template components (HEADER / BODY / etc.). If an order_details button is missing, the API appends one from order / referenceId / currency / paymentSettings. | [optional]
**reference_id** | **string** | Unique order / payment reference id (maps to reference_id) | [optional]
**currency** | **string** | Currency code for India payments | [optional]
**payment_settings** | **array<string,mixed>** | Optional payment settings (UPI / payment gateway / payment link). Forwarded as payment_settings on the order_details action. | [optional]
**order** | [**\OneMsgChatApi\Model\SendOrderDetailsRequestOrder**](SendOrderDetailsRequestOrder.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
