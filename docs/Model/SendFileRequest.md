# SendFileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | File source (required unless mediaId is set): - HTTP/HTTPS URL - Base64 data URI | [optional]
**filename** | **string** | File name with extension (required with body, not with mediaId) | [optional]
**media_id** | **string** | WABA media id from uploadMedia (alternative to body) | [optional]
**media_type** | **string** | Required when using mediaId | [optional]
**voice** | **bool** | Native WhatsApp voice note (audio/ogg only) | [optional]
**caption** | **string** |  | [optional]
**quoted_msg_id** | **string** |  | [optional]
**chat_id** | **string** |  | [optional]
**phone** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
