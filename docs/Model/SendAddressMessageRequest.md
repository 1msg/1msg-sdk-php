# SendAddressMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone** | **int** | Recipient phone (E.164 digits, no +). Must match country. | [optional]
**chat_id** | **string** |  | [optional]
**body** | **string** | Body text shown with the address request |
**country** | **string** | Address form country. Defaults to IN if omitted. | [optional]
**values** | **array<string,mixed>** | Optional prefilled address fields | [optional]
**saved_addresses** | **array<string,mixed>[]** | Optional previously saved addresses for the user | [optional]
**validation_errors** | **array<string,mixed>** | Optional field validation errors when re-prompting | [optional]
**quoted_msg_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
