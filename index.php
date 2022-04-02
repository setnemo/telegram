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

require('vendor/autoload.php');

try {
    $classStorage = ClassStorage::instance(ClassStorage::class);
    $serializer = $classStorage::instance(Serializer::class, SerializerBuilder::create()->build());
    $client = $classStorage::instance(ClientInterface::class, new Client());
    $configuration = $classStorage::instance(
        Configuration::class,
        new Configuration(
            getenv('BOT_TOKEN'),
            '')
    );
    $api = $classStorage::instance(Api::class, new Api());
    $Telegram = $classStorage::instance(Telegram::class, new Telegram(
        $classStorage::instance(Configuration::class),
        $classStorage::instance(Api::class)
    ));

    $content = file_get_contents("php://input");

    /** @var Update $update */
    $update = $serializer->deserialize($content, Update::class, 'json');

    (new \Setnemo\Telegram\Methods\SendMessage(
        new \Setnemo\Telegram\Methods\DTOs\SendMessage($update->getMessage()->getFrom()->getId(), 'Herak', 'html')
    ))->printResponse();
} catch (TelegramBotException $e) {
}


echo '{}';
