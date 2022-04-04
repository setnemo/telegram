<?php

use GuzzleHttp\Client;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Client\ClientInterface;
use Setnemo\Telegram\Api;
use Setnemo\Telegram\ClassStorage;
use Setnemo\Telegram\Configuration;
use Setnemo\Telegram\Telegram;
use Setnemo\Telegram\TelegramBotException;
use Setnemo\Telegram\Types\Update;
use Symfony\Component\HttpFoundation\JsonResponse;

require('vendor/autoload.php');

try {
    $classStorage = ClassStorage::instance(ClassStorage::class);
    $serializer = $classStorage::instance(Serializer::class, SerializerBuilder::create()->build());
    $client = $classStorage::instance(ClientInterface::class, new Client());
    /** @var Configuration $configuration */
    $configuration = $classStorage::instance(
        Configuration::class,
        new Configuration(
            getenv('BOT_TOKEN'),
            '')
    );
    /** @var Api $api */
    $api = $classStorage::instance(Api::class, new Api($serializer));
    /** @var Telegram $telegram */
    $telegram = $classStorage::instance(Telegram::class, new Telegram(
        $classStorage::instance(Configuration::class),
        $classStorage::instance(Api::class)
    ));

    $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
    $response = $telegram->entry($request);
    if ($configuration->isWebhookRequest()) {
        $response->setEncodingOptions(JsonResponse::DEFAULT_ENCODING_OPTIONS | \JSON_PRESERVE_ZERO_FRACTION);
        $response->send();
    } else {
        /** TODO convert $response to $request  and send it */
        $telegram->sendRequest();
    }
} catch (TelegramBotException $e) {
}


