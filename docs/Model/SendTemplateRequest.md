# SendTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template** | **string** | Approved template name (template &#x60;name&#x60;, not the old HSM &#x60;element_name&#x60;) | [optional]
**language** | [**\OneMsgSdk\Model\SendTemplateRequestLanguage**](SendTemplateRequestLanguage.md) |  | [optional]
**namespace** | **string** | Template namespace from &#x60;list_templates&#x60; | [optional]
**params** | **array<string,mixed>[]** | Template components in WhatsApp Cloud API format. Each item is an object with &#x60;type&#x60; (&#x60;body&#x60;, &#x60;header&#x60;, &#x60;button&#x60;) and &#x60;parameters&#x60; (objects with &#x60;type&#x60; + &#x60;text&#x60; / media / action). Never a list of strings. Never HSM &#x60;localizable_params&#x60;. | [optional]
**phone** | **string** | Recipient phone with country code (use phone or chatId) | [optional]
**chat_id** | **string** | Recipient chat ID (&#x60;phone@c.us&#x60;, group &#x60;@g.us&#x60;, or BSUID &#x60;@lid&#x60;). Use phone or chatId. | [optional]
**quoted_msg_id** | **string** | Optional Cloud API wamid to quote | [optional]
**use_m_mlite** | **bool** | Force Marketing Messages API (POST marketing_messages). If omitted, and the channel has mm_lite_enabled and mm_lite_available: MARKETING templates and templates with an unknown category use marketing_messages. An unknown category falls back to messages (mmLiteFallback) when Meta rejects it. Known AUTHENTICATION and UTILITY templates stay on messages. useMMlite:false forces messages. | [optional]
**message_activity_sharing** | **bool** | Sets message_activity_sharing on WABA payload. Enables click tracking webhooks. Requires MM Lite path. Ignored on Cloud API fallback. | [optional]
**message_send_ttl_seconds** | **int** | Template message TTL in seconds (message_send_ttl_seconds). MARKETING via MM Lite: 43200–2592000. AUTHENTICATION: 30–900. UTILITY: 30–43200. AUTH/UTILITY also accept -1 (30-day custom TTL). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
