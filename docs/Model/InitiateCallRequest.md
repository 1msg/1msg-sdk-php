# InitiateCallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**messaging_product** | **string** | Must be &#x60;whatsapp&#x60; |
**action** | **string** | Call control action |
**call_id** | **string** | WhatsApp call id from the inbound/outbound calls webhook (&#x60;calls[].id&#x60;). Required for &#x60;pre_accept&#x60;, &#x60;accept&#x60;, &#x60;reject&#x60;, &#x60;terminate&#x60;. | [optional]
**to** | **string** | Recipient WhatsApp user phone (digits, country code, no +). Required for outbound &#x60;connect&#x60;. | [optional]
**biz_opaque_callback_data** | **string** | Optional opaque string echoed on later call webhooks for correlation | [optional]
**session** | [**\OneMsgSdk\Model\InitiateCallRequestSession**](InitiateCallRequestSession.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
