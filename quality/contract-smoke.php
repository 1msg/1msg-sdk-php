<?php
/** Offline public-package smoke: autoloading, wire names, optional omission and required validation. */
require dirname(__DIR__) . '/vendor/autoload.php';

use OneMsgSdk\Model\SendMessageRequest;
use OneMsgSdk\ObjectSerializer;
use OneMsgSdk\Api\MessagingApi;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;

/** Throw independently of php.ini assertion settings when a contract invariant fails. */
function requireContract(bool $condition, string $message): void {
    if (!$condition) throw new RuntimeException($message);
}

$model = new SendMessageRequest(['body' => 'Hello 👋', 'chat_id' => '12020721369@c.us']);
$payload = (array) ObjectSerializer::sanitizeForSerialization($model);
requireContract($payload['body'] === 'Hello 👋', 'required body changed');
requireContract($payload['chatId'] === '12020721369@c.us', 'chatId wire name changed');
requireContract(!array_key_exists('phone', $payload), 'unset phone serialized');
requireContract(!array_key_exists('quotedMsgId', $payload), 'unset quotedMsgId serialized');
requireContract(!(new SendMessageRequest())->valid(), 'missing required body accepted');

$history = [];
$mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], '{"sent":true,"id":"fixture-message"}')]);
$handler = HandlerStack::create($mock);
$handler->push(Middleware::history($history));
$api = new MessagingApi(new Client(['handler' => $handler]));
$response = $api->sendMessage('fixture+token&value', 'Hello 👋', null, '12020721369@c.us');
requireContract($response->getSent() === true, 'response sent flag not decoded');
requireContract(count($history) === 1, 'unexpected transport request count');
$request = $history[0]['request'];
parse_str($request->getUri()->getQuery(), $query);
requireContract($query['token'] === 'fixture+token&value', 'token did not round-trip');
requireContract(str_ends_with($request->getUri()->getPath(), '/sendMessage'), 'operation path changed');
requireContract((string) $request->getBody() !== '', 'required request payload was lost');
echo "offline SDK contract smoke passed\n";
