# ChatApi

Public client API for sending messages, managing groups, flows, and templates.

This is the API exposed to end customers via platform.1msg.io

**Authentication:** All requests require `token` query parameter with JWT or API key.

**Documentation:** https://help.1msg.io/platform-1msg/getting-start/quick-start
**API Docs:** https://docs.1msg.io/


For more information, please visit [https://help.1msg.io](https://help.1msg.io).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/ChatApi/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: tokenAuth
$config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OneMsgChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OneMsgChatApi\Api\CallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | JWT token or API key for authorization

try {
    $result = $apiInstance->getCallingSettings($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallingApi->getCallingSettings: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.1msg.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CallingApi* | [**getCallingSettings**](docs/Api/CallingApi.md#getcallingsettings) | **GET** /callingSettings | Get calling settings
*CallingApi* | [**initiateCall**](docs/Api/CallingApi.md#initiatecall) | **POST** /initiateCall | Initiate WhatsApp call
*CallingApi* | [**updateCallingSettings**](docs/Api/CallingApi.md#updatecallingsettings) | **POST** /callingSettings | Update calling settings
*CatalogApi* | [**createCommerce**](docs/Api/CatalogApi.md#createcommerce) | **POST** /commerce | Set Commerce Settings
*CatalogApi* | [**getCommerce**](docs/Api/CatalogApi.md#getcommerce) | **GET** /commerce | Get Commerce Settings
*ChannelApi* | [**getConversationalAutomation**](docs/Api/ChannelApi.md#getconversationalautomation) | **GET** /conversationalAutomation | Get conversational automation settings
*ChannelApi* | [**getStatus**](docs/Api/ChannelApi.md#getstatus) | **GET** /status | Get channel status
*ChannelApi* | [**setConversationalAutomation**](docs/Api/ChannelApi.md#setconversationalautomation) | **POST** /conversationalAutomation | Set conversational automation settings
*FlowsApi* | [**createFlows**](docs/Api/FlowsApi.md#createflows) | **POST** /flows | Create Flow
*FlowsApi* | [**createFlowsFlowIdDeprecate**](docs/Api/FlowsApi.md#createflowsflowiddeprecate) | **POST** /flows/{flowId}/deprecate | Deprecate Flow
*FlowsApi* | [**createFlowsFlowIdPublish**](docs/Api/FlowsApi.md#createflowsflowidpublish) | **POST** /flows/{flowId}/publish | Publish Flow
*FlowsApi* | [**deleteFlowsFlowId**](docs/Api/FlowsApi.md#deleteflowsflowid) | **DELETE** /flows/{flowId} | Delete Flow
*FlowsApi* | [**getFlowsFlowId**](docs/Api/FlowsApi.md#getflowsflowid) | **GET** /flows/{flowId} | Get Flow Details
*FlowsApi* | [**getFlowsFlowIdPreview**](docs/Api/FlowsApi.md#getflowsflowidpreview) | **GET** /flows/{flowId}/preview | Preview Flow
*FlowsApi* | [**getWhatsappBusinessEncryption**](docs/Api/FlowsApi.md#getwhatsappbusinessencryption) | **GET** /whatsapp_business_encryption | Get business encryption public key
*FlowsApi* | [**listFlows**](docs/Api/FlowsApi.md#listflows) | **GET** /flows | List Flows
*FlowsApi* | [**patchFlowsFlowIdAssets**](docs/Api/FlowsApi.md#patchflowsflowidassets) | **PATCH** /flows/{flowId}/assets | Update Flow Structure
*FlowsApi* | [**patchFlowsFlowIdMetadata**](docs/Api/FlowsApi.md#patchflowsflowidmetadata) | **PATCH** /flows/{flowId}/metadata | Update Flow Metadata
*FlowsApi* | [**setWhatsappBusinessEncryption**](docs/Api/FlowsApi.md#setwhatsappbusinessencryption) | **POST** /whatsapp_business_encryption | Set business encryption public key
*GroupsApi* | [**createGroups**](docs/Api/GroupsApi.md#creategroups) | **POST** /groups | Create Group
*GroupsApi* | [**createGroupsGroupId**](docs/Api/GroupsApi.md#creategroupsgroupid) | **POST** /groups/{groupId} | Update Group Info
*GroupsApi* | [**createGroupsGroupIdInvitelink**](docs/Api/GroupsApi.md#creategroupsgroupidinvitelink) | **POST** /groups/{groupId}/inviteLink | Reset Invite Link
*GroupsApi* | [**deleteGroupsGroupId**](docs/Api/GroupsApi.md#deletegroupsgroupid) | **DELETE** /groups/{groupId} | Delete Group
*GroupsApi* | [**getGroupsGroupId**](docs/Api/GroupsApi.md#getgroupsgroupid) | **GET** /groups/{groupId} | Get Group Info
*GroupsApi* | [**getGroupsGroupIdInvitelink**](docs/Api/GroupsApi.md#getgroupsgroupidinvitelink) | **GET** /groups/{groupId}/inviteLink | Get Invite Link
*GroupsApi* | [**listGroups**](docs/Api/GroupsApi.md#listgroups) | **GET** /groups | Get Groups List
*MessagingApi* | [**createReadMessage**](docs/Api/MessagingApi.md#createreadmessage) | **POST** /readMessage | Mark message as read
*MessagingApi* | [**createUploadMedia**](docs/Api/MessagingApi.md#createuploadmedia) | **POST** /uploadMedia | Upload media
*MessagingApi* | [**deleteMedia**](docs/Api/MessagingApi.md#deletemedia) | **DELETE** /media/{mediaId} | Delete media from WABA storage
*MessagingApi* | [**deleteMediaLegacy**](docs/Api/MessagingApi.md#deletemedialegacy) | **POST** /deleteMedia | Delete media from WABA storage (deprecated alias)
*MessagingApi* | [**getMmLiteStatus**](docs/Api/MessagingApi.md#getmmlitestatus) | **GET** /mmLiteStatus | Get MM Lite availability and status
*MessagingApi* | [**listMessages**](docs/Api/MessagingApi.md#listmessages) | **GET** /messages | Get messages list
*MessagingApi* | [**retrieveMedia**](docs/Api/MessagingApi.md#retrievemedia) | **GET** /retrieveMedia | Retrieve uploaded media metadata
*MessagingApi* | [**sendAddressMessage**](docs/Api/MessagingApi.md#sendaddressmessage) | **POST** /sendAddressMessage | Send address request message
*MessagingApi* | [**sendButton**](docs/Api/MessagingApi.md#sendbutton) | **POST** /sendButton | Send Reply Buttons Message
*MessagingApi* | [**sendCarousel**](docs/Api/MessagingApi.md#sendcarousel) | **POST** /sendCarousel | Send Carousel
*MessagingApi* | [**sendContact**](docs/Api/MessagingApi.md#sendcontact) | **POST** /sendContact | Send a Contact
*MessagingApi* | [**sendCtaUrl**](docs/Api/MessagingApi.md#sendctaurl) | **POST** /sendCtaUrl | Send CTA URL interactive message
*MessagingApi* | [**sendFile**](docs/Api/MessagingApi.md#sendfile) | **POST** /sendFile | Send a File
*MessagingApi* | [**sendFlow**](docs/Api/MessagingApi.md#sendflow) | **POST** /sendFlow | Send WhatsApp Flow Message
*MessagingApi* | [**sendList**](docs/Api/MessagingApi.md#sendlist) | **POST** /sendList | Send List Message
*MessagingApi* | [**sendLocation**](docs/Api/MessagingApi.md#sendlocation) | **POST** /sendLocation | Send a Location
*MessagingApi* | [**sendLocationRequest**](docs/Api/MessagingApi.md#sendlocationrequest) | **POST** /sendLocationRequest | Send Location Request Message
*MessagingApi* | [**sendMessage**](docs/Api/MessagingApi.md#sendmessage) | **POST** /sendMessage | Send a Message
*MessagingApi* | [**sendOrderDetails**](docs/Api/MessagingApi.md#sendorderdetails) | **POST** /sendOrderDetails | Send order details (India payments template)
*MessagingApi* | [**sendPaymentRequest**](docs/Api/MessagingApi.md#sendpaymentrequest) | **POST** /sendPaymentRequest | Send payment request (regional)
*MessagingApi* | [**sendProduct**](docs/Api/MessagingApi.md#sendproduct) | **POST** /sendProduct | Send a Product
*MessagingApi* | [**sendReaction**](docs/Api/MessagingApi.md#sendreaction) | **POST** /sendReaction | Send Reaction
*MessagingApi* | [**sendSticker**](docs/Api/MessagingApi.md#sendsticker) | **POST** /sendSticker | Send sticker message
*ProfileApi* | [**getMe**](docs/Api/ProfileApi.md#getme) | **GET** /me | Get Profile Info
*ProfileApi* | [**updateMe**](docs/Api/ProfileApi.md#updateme) | **POST** /me | Update profile info
*TemplatesApi* | [**addTemplate**](docs/Api/TemplatesApi.md#addtemplate) | **POST** /addTemplate | Create message template
*TemplatesApi* | [**listTemplates**](docs/Api/TemplatesApi.md#listtemplates) | **GET** /templates | Get templates list
*TemplatesApi* | [**removeTemplate**](docs/Api/TemplatesApi.md#removetemplate) | **POST** /removeTemplate | Remove message template
*TemplatesApi* | [**sendTemplate**](docs/Api/TemplatesApi.md#sendtemplate) | **POST** /sendTemplate | Send Template Message
*UsersApi* | [**blockUser**](docs/Api/UsersApi.md#blockuser) | **POST** /blockUser | Block WhatsApp user
*UsersApi* | [**listBlockedUsers**](docs/Api/UsersApi.md#listblockedusers) | **GET** /blockedUsers | List blocked WhatsApp users
*UsersApi* | [**unblockUser**](docs/Api/UsersApi.md#unblockuser) | **POST** /unblockUser | Unblock WhatsApp user
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhook | Get webhook URL
*WebhooksApi* | [**setWebhook**](docs/Api/WebhooksApi.md#setwebhook) | **POST** /webhook | Set webhook URL

## Models

- [AddTemplateRequest](docs/Model/AddTemplateRequest.md)
- [BlockUserRequest](docs/Model/BlockUserRequest.md)
- [ConversationalAutomation](docs/Model/ConversationalAutomation.md)
- [ConversationalAutomationCommandsInner](docs/Model/ConversationalAutomationCommandsInner.md)
- [CreateCommerce200Response](docs/Model/CreateCommerce200Response.md)
- [CreateCommerceRequest](docs/Model/CreateCommerceRequest.md)
- [CreateCommerceRequestParams](docs/Model/CreateCommerceRequestParams.md)
- [CreateGroups200Response](docs/Model/CreateGroups200Response.md)
- [CreateReadMessage200Response](docs/Model/CreateReadMessage200Response.md)
- [CreateReadMessage401Response](docs/Model/CreateReadMessage401Response.md)
- [CreateReadMessageRequest](docs/Model/CreateReadMessageRequest.md)
- [DeleteFlowsFlowId200Response](docs/Model/DeleteFlowsFlowId200Response.md)
- [DeleteGroupsGroupId200Response](docs/Model/DeleteGroupsGroupId200Response.md)
- [DeleteMediaLegacyRequest](docs/Model/DeleteMediaLegacyRequest.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [GetCommerce200ResponseInner](docs/Model/GetCommerce200ResponseInner.md)
- [GetMmLiteStatus200Response](docs/Model/GetMmLiteStatus200Response.md)
- [GetWebhook200Response](docs/Model/GetWebhook200Response.md)
- [GetWhatsappBusinessEncryption200Response](docs/Model/GetWhatsappBusinessEncryption200Response.md)
- [ListBlockedUsers200Response](docs/Model/ListBlockedUsers200Response.md)
- [ListFlows200Response](docs/Model/ListFlows200Response.md)
- [ListMessages200Response](docs/Model/ListMessages200Response.md)
- [ListTemplates200Response](docs/Model/ListTemplates200Response.md)
- [MessageSentResponse](docs/Model/MessageSentResponse.md)
- [PatchFlowsFlowIdAssets200Response](docs/Model/PatchFlowsFlowIdAssets200Response.md)
- [ProfileInfo](docs/Model/ProfileInfo.md)
- [RetrieveMedia200Response](docs/Model/RetrieveMedia200Response.md)
- [SendAddressMessageRequest](docs/Model/SendAddressMessageRequest.md)
- [SendButtonRequest](docs/Model/SendButtonRequest.md)
- [SendButtonRequestSectionsInner](docs/Model/SendButtonRequestSectionsInner.md)
- [SendButtonRequestSectionsInnerReply](docs/Model/SendButtonRequestSectionsInnerReply.md)
- [SendCarouselRequest1](docs/Model/SendCarouselRequest1.md)
- [SendContactRequest](docs/Model/SendContactRequest.md)
- [SendContactRequestContactsInner](docs/Model/SendContactRequestContactsInner.md)
- [SendContactRequestContactsInnerName](docs/Model/SendContactRequestContactsInnerName.md)
- [SendContactRequestContactsInnerOrg](docs/Model/SendContactRequestContactsInnerOrg.md)
- [SendContactRequestContactsInnerPhonesInner](docs/Model/SendContactRequestContactsInnerPhonesInner.md)
- [SendCtaUrlRequest](docs/Model/SendCtaUrlRequest.md)
- [SendFileRequest](docs/Model/SendFileRequest.md)
- [SendFlowRequest1](docs/Model/SendFlowRequest1.md)
- [SendFlowRequest1Header](docs/Model/SendFlowRequest1Header.md)
- [SendFlowRequestHeader](docs/Model/SendFlowRequestHeader.md)
- [SendListRequest](docs/Model/SendListRequest.md)
- [SendListRequestSectionsInner](docs/Model/SendListRequestSectionsInner.md)
- [SendListRequestSectionsInnerRowsInner](docs/Model/SendListRequestSectionsInnerRowsInner.md)
- [SendLocationRequest1](docs/Model/SendLocationRequest1.md)
- [SendLocationRequestRequest](docs/Model/SendLocationRequestRequest.md)
- [SendMessageRequest](docs/Model/SendMessageRequest.md)
- [SendOrderDetailsRequest](docs/Model/SendOrderDetailsRequest.md)
- [SendOrderDetailsRequestLanguage](docs/Model/SendOrderDetailsRequestLanguage.md)
- [SendOrderDetailsRequestOrder](docs/Model/SendOrderDetailsRequestOrder.md)
- [SendOrderDetailsRequestOrderItemsInner](docs/Model/SendOrderDetailsRequestOrderItemsInner.md)
- [SendOrderDetailsRequestOrderItemsInnerAmount](docs/Model/SendOrderDetailsRequestOrderItemsInnerAmount.md)
- [SendPaymentRequestRequest](docs/Model/SendPaymentRequestRequest.md)
- [SendReactionRequest](docs/Model/SendReactionRequest.md)
- [SendStickerRequest](docs/Model/SendStickerRequest.md)
- [SendTemplateRequest](docs/Model/SendTemplateRequest.md)
- [SendTemplateRequestLanguage](docs/Model/SendTemplateRequestLanguage.md)
- [SetWhatsappBusinessEncryptionRequest](docs/Model/SetWhatsappBusinessEncryptionRequest.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [UpdateMeRequest](docs/Model/UpdateMeRequest.md)

## Authorization

Authentication schemes defined for the API:
### tokenAuth

- **Type**: API key
- **API key parameter name**: token
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@1msg.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0`
    - Generator version: `7.22.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
