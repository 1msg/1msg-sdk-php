# SendTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template** | **string** |  | [optional]
**language** | [**\OneMsgChatApi\Model\SendTemplateRequestLanguage**](SendTemplateRequestLanguage.md) |  | [optional]
**namespace** | **string** |  | [optional]
**params** | **mixed[]** |  | [optional]
**phone** | **string** |  | [optional]
**use_m_mlite** | **bool** | Force Marketing Messages API (POST marketing_messages). If omitted: auto for MARKETING category when channel has mm_lite_enabled and mm_lite_available service settings. | [optional]
**message_activity_sharing** | **bool** | Sets message_activity_sharing on WABA payload. Enables click tracking webhooks. Requires MM Lite path. Ignored on Cloud API fallback. | [optional]
**message_send_ttl_seconds** | **int** | Template message TTL in seconds (message_send_ttl_seconds). MARKETING via MM Lite: 43200–2592000. AUTHENTICATION: 30–900. UTILITY: 30–43200. AUTH/UTILITY also accept -1 (30-day custom TTL). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
