<?php
namespace OneMsgSdk;

class PlatformError extends \RuntimeException {
    public int $status;
    public string $responseBody;
    public function __construct(int $status, string $responseBody) {
        parent::__construct("Platform API HTTP {$status}");
        $this->status = $status;
        $this->responseBody = $responseBody;
    }
}

/** Platform API client. Bearer API key, not the WhatsApp channel token. */
class PlatformClient {
    private string $apiKey;
    private string $baseUrl;
    public function __construct(string $apiKey, string $baseUrl = 'https://api.1msg.io') {
        if (trim($apiKey) === '') throw new \InvalidArgumentException('apiKey is required');
        $this->apiKey = trim($apiKey);
        $this->baseUrl = rtrim($baseUrl !== '' ? $baseUrl : 'https://api.1msg.io', '/');
    }

    public function call(string $operationId, ?array $path = null, ?array $query = null, $body = null) {
        $spec = null;
        foreach (self::operations() as $operation) {
            if ($operation['id'] === $operationId) $spec = $operation;
        }
        if ($spec === null) throw new \InvalidArgumentException('unknown platform operation '.$operationId);
        $urlPath = $spec['path'];
        foreach ($spec['pathParams'] as $name) {
            if (!is_array($path) || !array_key_exists($name, $path)) throw new \InvalidArgumentException('missing path param '.$name);
            $urlPath = str_replace('{'.$name.'}', rawurlencode((string) $path[$name]), $urlPath);
        }
        $url = $this->baseUrl.$urlPath;
        if (is_array($query) && $query !== []) $url .= '?'.http_build_query($query);
        $headers = ['Authorization: Bearer '.$this->apiKey, 'Accept: application/json'];
        $payload = null;
        if ($body !== null) { $payload = json_encode($body); $headers[] = 'Content-Type: application/json'; }
        $ch = curl_init($url);
        curl_setopt_array($ch, [CURLOPT_CUSTOMREQUEST => $spec['method'], CURLOPT_RETURNTRANSFER => true, CURLOPT_HTTPHEADER => $headers]);
        if ($payload !== null) curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        $raw = curl_exec($ch);
        $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        if ($raw === false) throw new PlatformError($status, $error);
        if ($status < 200 || $status >= 300) throw new PlatformError($status, (string) $raw);
        if ($raw === '') return null;
        return json_decode((string) $raw, true);
    }

    public function listInboxChannels(?array $path = null, ?array $query = null, $body = null) { return $this->call("listInboxChannels", $path, $query, $body); }
    public function listInboxChannelAssignees(?array $path = null, ?array $query = null, $body = null) { return $this->call("listInboxChannelAssignees", $path, $query, $body); }
    public function listInboxConversations(?array $path = null, ?array $query = null, $body = null) { return $this->call("listInboxConversations", $path, $query, $body); }
    public function searchInboxConversations(?array $path = null, ?array $query = null, $body = null) { return $this->call("searchInboxConversations", $path, $query, $body); }
    public function countInboxConversations(?array $path = null, ?array $query = null, $body = null) { return $this->call("countInboxConversations", $path, $query, $body); }
    public function getInboxConversation(?array $path = null, ?array $query = null, $body = null) { return $this->call("getInboxConversation", $path, $query, $body); }
    public function updateInboxConversationStatus(?array $path = null, ?array $query = null, $body = null) { return $this->call("updateInboxConversationStatus", $path, $query, $body); }
    public function updateInboxConversationAssignee(?array $path = null, ?array $query = null, $body = null) { return $this->call("updateInboxConversationAssignee", $path, $query, $body); }
    public function listInboxConversationMessages(?array $path = null, ?array $query = null, $body = null) { return $this->call("listInboxConversationMessages", $path, $query, $body); }
    public function blockInboxContact(?array $path = null, ?array $query = null, $body = null) { return $this->call("blockInboxContact", $path, $query, $body); }
    public function unblockInboxContact(?array $path = null, ?array $query = null, $body = null) { return $this->call("unblockInboxContact", $path, $query, $body); }
    public function renameInboxConversation(?array $path = null, ?array $query = null, $body = null) { return $this->call("renameInboxConversation", $path, $query, $body); }
    public function listInboxContacts(?array $path = null, ?array $query = null, $body = null) { return $this->call("listInboxContacts", $path, $query, $body); }
    public function getInboxWebhook(?array $path = null, ?array $query = null, $body = null) { return $this->call("getInboxWebhook", $path, $query, $body); }
    public function setInboxWebhook(?array $path = null, ?array $query = null, $body = null) { return $this->call("setInboxWebhook", $path, $query, $body); }
    public function deleteInboxWebhook(?array $path = null, ?array $query = null, $body = null) { return $this->call("deleteInboxWebhook", $path, $query, $body); }
    public function rotateInboxWebhookSecret(?array $path = null, ?array $query = null, $body = null) { return $this->call("rotateInboxWebhookSecret", $path, $query, $body); }
    public function listCampaignSegments(?array $path = null, ?array $query = null, $body = null) { return $this->call("listCampaignSegments", $path, $query, $body); }
    public function createCampaignSegment(?array $path = null, ?array $query = null, $body = null) { return $this->call("createCampaignSegment", $path, $query, $body); }
    public function getCampaignSegment(?array $path = null, ?array $query = null, $body = null) { return $this->call("getCampaignSegment", $path, $query, $body); }
    public function updateCampaignSegment(?array $path = null, ?array $query = null, $body = null) { return $this->call("updateCampaignSegment", $path, $query, $body); }
    public function deleteCampaignSegment(?array $path = null, ?array $query = null, $body = null) { return $this->call("deleteCampaignSegment", $path, $query, $body); }
    public function listCampaignSegmentMembers(?array $path = null, ?array $query = null, $body = null) { return $this->call("listCampaignSegmentMembers", $path, $query, $body); }
    public function addCampaignSegmentMembers(?array $path = null, ?array $query = null, $body = null) { return $this->call("addCampaignSegmentMembers", $path, $query, $body); }
    public function replaceCampaignSegmentMembers(?array $path = null, ?array $query = null, $body = null) { return $this->call("replaceCampaignSegmentMembers", $path, $query, $body); }
    public function removeCampaignSegmentMembers(?array $path = null, ?array $query = null, $body = null) { return $this->call("removeCampaignSegmentMembers", $path, $query, $body); }
    public function updateCampaignSegmentMember(?array $path = null, ?array $query = null, $body = null) { return $this->call("updateCampaignSegmentMember", $path, $query, $body); }
    public function listCampaigns(?array $path = null, ?array $query = null, $body = null) { return $this->call("listCampaigns", $path, $query, $body); }
    public function createCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("createCampaign", $path, $query, $body); }
    public function getCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("getCampaign", $path, $query, $body); }
    public function updateCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("updateCampaign", $path, $query, $body); }
    public function previewCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("previewCampaign", $path, $query, $body); }
    public function sendCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("sendCampaign", $path, $query, $body); }
    public function scheduleCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("scheduleCampaign", $path, $query, $body); }
    public function unscheduleCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("unscheduleCampaign", $path, $query, $body); }
    public function pauseCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("pauseCampaign", $path, $query, $body); }
    public function resumeCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("resumeCampaign", $path, $query, $body); }
    public function completeCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("completeCampaign", $path, $query, $body); }
    public function testCampaign(?array $path = null, ?array $query = null, $body = null) { return $this->call("testCampaign", $path, $query, $body); }
    public function getCampaignAnalytics(?array $path = null, ?array $query = null, $body = null) { return $this->call("getCampaignAnalytics", $path, $query, $body); }
    public function listCampaignAnalyticsRecipients(?array $path = null, ?array $query = null, $body = null) { return $this->call("listCampaignAnalyticsRecipients", $path, $query, $body); }
    public function listCampaignAnalyticsReplies(?array $path = null, ?array $query = null, $body = null) { return $this->call("listCampaignAnalyticsReplies", $path, $query, $body); }
    public function listCampaignAnalyticsErrors(?array $path = null, ?array $query = null, $body = null) { return $this->call("listCampaignAnalyticsErrors", $path, $query, $body); }

    private static function operations(): array {
        return json_decode("[{\"id\":\"listInboxChannels\",\"method\":\"GET\",\"path\":\"/api/v1/inbox/channels\",\"pathParams\":[]},{\"id\":\"listInboxChannelAssignees\",\"method\":\"GET\",\"path\":\"/api/v1/inbox/channels/{channelId}/assignees\",\"pathParams\":[\"channelId\"]},{\"id\":\"listInboxConversations\",\"method\":\"GET\",\"path\":\"/api/v1/inbox/conversations\",\"pathParams\":[]},{\"id\":\"searchInboxConversations\",\"method\":\"GET\",\"path\":\"/api/v1/inbox/conversations/search\",\"pathParams\":[]},{\"id\":\"countInboxConversations\",\"method\":\"GET\",\"path\":\"/api/v1/inbox/conversations/counts\",\"pathParams\":[]},{\"id\":\"getInboxConversation\",\"method\":\"GET\",\"path\":\"/api/v1/inbox/conversations/{conversationId}\",\"pathParams\":[\"conversationId\"]},{\"id\":\"updateInboxConversationStatus\",\"method\":\"PATCH\",\"path\":\"/api/v1/inbox/conversations/{conversationId}/status\",\"pathParams\":[\"conversationId\"]},{\"id\":\"updateInboxConversationAssignee\",\"method\":\"PATCH\",\"path\":\"/api/v1/inbox/conversations/{conversationId}/assignee\",\"pathParams\":[\"conversationId\"]},{\"id\":\"listInboxConversationMessages\",\"method\":\"GET\",\"path\":\"/api/v1/inbox/conversations/{conversationId}/messages\",\"pathParams\":[\"conversationId\"]},{\"id\":\"blockInboxContact\",\"method\":\"POST\",\"path\":\"/api/v1/inbox/conversations/{conversationId}/block\",\"pathParams\":[\"conversationId\"]},{\"id\":\"unblockInboxContact\",\"method\":\"POST\",\"path\":\"/api/v1/inbox/conversations/{conversationId}/unblock\",\"pathParams\":[\"conversationId\"]},{\"id\":\"renameInboxConversation\",\"method\":\"PATCH\",\"path\":\"/api/v1/inbox/conversations/{conversationId}/title\",\"pathParams\":[\"conversationId\"]},{\"id\":\"listInboxContacts\",\"method\":\"GET\",\"path\":\"/api/v1/inbox/contacts\",\"pathParams\":[]},{\"id\":\"getInboxWebhook\",\"method\":\"GET\",\"path\":\"/api/v1/inbox/webhook\",\"pathParams\":[]},{\"id\":\"setInboxWebhook\",\"method\":\"PUT\",\"path\":\"/api/v1/inbox/webhook\",\"pathParams\":[]},{\"id\":\"deleteInboxWebhook\",\"method\":\"DELETE\",\"path\":\"/api/v1/inbox/webhook\",\"pathParams\":[]},{\"id\":\"rotateInboxWebhookSecret\",\"method\":\"POST\",\"path\":\"/api/v1/inbox/webhook/secret\",\"pathParams\":[]},{\"id\":\"listCampaignSegments\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns/segments\",\"pathParams\":[]},{\"id\":\"createCampaignSegment\",\"method\":\"POST\",\"path\":\"/api/v1/campaigns/segments\",\"pathParams\":[]},{\"id\":\"getCampaignSegment\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns/segments/{segmentId}\",\"pathParams\":[\"segmentId\"]},{\"id\":\"updateCampaignSegment\",\"method\":\"PATCH\",\"path\":\"/api/v1/campaigns/segments/{segmentId}\",\"pathParams\":[\"segmentId\"]},{\"id\":\"deleteCampaignSegment\",\"method\":\"DELETE\",\"path\":\"/api/v1/campaigns/segments/{segmentId}\",\"pathParams\":[\"segmentId\"]},{\"id\":\"listCampaignSegmentMembers\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns/segments/{segmentId}/members\",\"pathParams\":[\"segmentId\"]},{\"id\":\"addCampaignSegmentMembers\",\"method\":\"POST\",\"path\":\"/api/v1/campaigns/segments/{segmentId}/members\",\"pathParams\":[\"segmentId\"]},{\"id\":\"replaceCampaignSegmentMembers\",\"method\":\"PUT\",\"path\":\"/api/v1/campaigns/segments/{segmentId}/members\",\"pathParams\":[\"segmentId\"]},{\"id\":\"removeCampaignSegmentMembers\",\"method\":\"DELETE\",\"path\":\"/api/v1/campaigns/segments/{segmentId}/members\",\"pathParams\":[\"segmentId\"]},{\"id\":\"updateCampaignSegmentMember\",\"method\":\"PATCH\",\"path\":\"/api/v1/campaigns/segments/{segmentId}/members/{memberId}\",\"pathParams\":[\"segmentId\",\"memberId\"]},{\"id\":\"listCampaigns\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns\",\"pathParams\":[]},{\"id\":\"createCampaign\",\"method\":\"POST\",\"path\":\"/api/v1/campaigns\",\"pathParams\":[]},{\"id\":\"getCampaign\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns/{campaignId}\",\"pathParams\":[\"campaignId\"]},{\"id\":\"updateCampaign\",\"method\":\"PATCH\",\"path\":\"/api/v1/campaigns/{campaignId}\",\"pathParams\":[\"campaignId\"]},{\"id\":\"previewCampaign\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns/{campaignId}/preview\",\"pathParams\":[\"campaignId\"]},{\"id\":\"sendCampaign\",\"method\":\"POST\",\"path\":\"/api/v1/campaigns/{campaignId}/send\",\"pathParams\":[\"campaignId\"]},{\"id\":\"scheduleCampaign\",\"method\":\"PATCH\",\"path\":\"/api/v1/campaigns/{campaignId}/schedule\",\"pathParams\":[\"campaignId\"]},{\"id\":\"unscheduleCampaign\",\"method\":\"POST\",\"path\":\"/api/v1/campaigns/{campaignId}/unschedule\",\"pathParams\":[\"campaignId\"]},{\"id\":\"pauseCampaign\",\"method\":\"POST\",\"path\":\"/api/v1/campaigns/{campaignId}/pause\",\"pathParams\":[\"campaignId\"]},{\"id\":\"resumeCampaign\",\"method\":\"POST\",\"path\":\"/api/v1/campaigns/{campaignId}/resume\",\"pathParams\":[\"campaignId\"]},{\"id\":\"completeCampaign\",\"method\":\"POST\",\"path\":\"/api/v1/campaigns/{campaignId}/complete\",\"pathParams\":[\"campaignId\"]},{\"id\":\"testCampaign\",\"method\":\"POST\",\"path\":\"/api/v1/campaigns/{campaignId}/test\",\"pathParams\":[\"campaignId\"]},{\"id\":\"getCampaignAnalytics\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns/{campaignId}/analytics\",\"pathParams\":[\"campaignId\"]},{\"id\":\"listCampaignAnalyticsRecipients\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns/{campaignId}/analytics/recipients\",\"pathParams\":[\"campaignId\"]},{\"id\":\"listCampaignAnalyticsReplies\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns/{campaignId}/analytics/replies\",\"pathParams\":[\"campaignId\"]},{\"id\":\"listCampaignAnalyticsErrors\",\"method\":\"GET\",\"path\":\"/api/v1/campaigns/{campaignId}/analytics/errors\",\"pathParams\":[\"campaignId\"]}]", true);
    }
}
