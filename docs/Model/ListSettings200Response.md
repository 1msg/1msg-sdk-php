# ListSettings200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_url** | [**\OneMsgSdk\Model\ListSettings200ResponseWebhookUrl**](ListSettings200ResponseWebhookUrl.md) |  | [optional]
**guaranteed_hooks** | **bool** | Retry webhooks until acknowledged | [optional]
**ack_notifications_on** | **bool** | Include message ACK / status events in webhooks | [optional]
**raw_hooks** | **bool** | Forward raw provider webhook payloads | [optional]
**mm_lite_enabled** | **bool** |  | [optional]
**template_analytics_enabled** | **bool** |  | [optional]
**cta_url_link_tracking_opted_out** | **bool** |  | [optional]
**have_disabled_webhooks** | **bool** | &#x60;true&#x60; when at least one URL in &#x60;webhookUrl&#x60; is sticky auto-disabled. Not \&quot;the channel is dead\&quot;: other configured URLs still receive events. | [optional]
**circuit_state** | **string** | Compatibility scalar for **one** URL (first sticky-disabled, else first configured). Prefer &#x60;webhookStatuses[].circuitState&#x60;. | [optional]
**reason** | **string** | Last qualifying fail reason of the summary URL | [optional]
**fails** | **int** | Diagnostic only (summary URL). Qualifying failures in the rolling ~10 minute breaker window — not lifetime. Prefer &#x60;webhookStatuses&#x60;. | [optional]
**trips** | **int** | Diagnostic only (summary URL). Failed recovery probes (≈15 min → 1 h → 6 h). Sticky disable after 3. Not a blind unblock timer. | [optional]
**disabled_at** | **int** | Epoch milliseconds when the summary URL became sticky-disabled | [optional]
**first_fail_at** | **int** | Diagnostic only (summary URL). Epoch ms of the first fail in the current ~10 minute window (pairs with &#x60;fails&#x60;). | [optional]
**last_status** | **int** | Last HTTP status from the summary URL, when known | [optional]
**next_probe_at** | **int** | Epoch milliseconds of the next half-open probe for the summary URL, if any | [optional]
**disabled_webhooks** | **array<string,mixed>[]** | Currently configured URLs that are sticky auto-disabled (subset of &#x60;webhookUrl&#x60;) | [optional]
**webhook_statuses** | [**\OneMsgSdk\Model\WebhookUrlStatus[]**](WebhookUrlStatus.md) | One entry per currently configured URL. Prefer this over top-level &#x60;haveDisabledWebhooks&#x60; / &#x60;circuitState&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
