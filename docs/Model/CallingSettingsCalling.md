# CallingSettingsCalling

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Enable or disable Calling API on this number | [optional]
**call_icon_visibility** | **string** | Controls call icon visibility in the WhatsApp client | [optional]
**callback_permission_status** | **string** | When ENABLED, a user who calls your business automatically grants call permission for business-initiated callbacks (subject to Meta rules). | [optional]
**srtp_key_exchange_protocol** | **string** | SRTP key exchange. DTLS is default/recommended. SDES is only valid when SIP signaling is enabled. | [optional]
**call_hours** | [**\OneMsgSdk\Model\CallingSettingsCallingCallHours**](CallingSettingsCallingCallHours.md) |  | [optional]
**sip** | [**\OneMsgSdk\Model\CallingSettingsCallingSip**](CallingSettingsCallingSip.md) |  | [optional]
**video** | [**\OneMsgSdk\Model\CallingSettingsCallingVideo**](CallingSettingsCallingVideo.md) |  | [optional]
**audio** | [**\OneMsgSdk\Model\CallingSettingsCallingAudio**](CallingSettingsCallingAudio.md) |  | [optional]
**restrictions** | **array<string,mixed>** | Calling restrictions (response-only) | [optional]
**ip_addresses** | **array<string,mixed>** | Meta media IP ranges (response-only) | [optional]
**call_icons** | **array<string,mixed>** | Call icon country restrictions (response-only) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
