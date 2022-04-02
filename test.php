<?php

require('vendor/autoload.php');

use Psr\Http\Client\ClientExceptionInterface;
use Setnemo\Telegram\Types\Update;
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
define('BOT_TOKEN', getenv('BOT_TOKEN'));
define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

function apiRequestWebhook($method, $parameters) {
    if (!is_string($method)) {
        error_log("Method name must be a string\n");
        return false;
    }

    if (!$parameters) {
        $parameters = array();
    } else if (!is_array($parameters)) {
        error_log("Parameters must be an array\n");
        return false;
    }

    $parameters["method"] = $method;

    $payload = json_encode($parameters);
    header('Content-Type: application/json');
    header('Content-Length: '.strlen($payload));
    echo $payload;

    return true;
}

function exec_curl_request($handle) {
    $response = curl_exec($handle);

    if ($response === false) {
        $errno = curl_errno($handle);
        $error = curl_error($handle);
        error_log("Curl returned error $errno: $error\n");
        curl_close($handle);
        return false;
    }

    $http_code = intval(curl_getinfo($handle, CURLINFO_HTTP_CODE));
    curl_close($handle);

    if ($http_code >= 500) {
        // do not wat to DDOS server if something goes wrong
        sleep(10);
        return false;
    } else if ($http_code != 200) {
        $response = json_decode($response, true);
        error_log("Request has failed with error {$response['error_code']}: {$response['description']}\n");
        if ($http_code == 401) {
            throw new Exception('Invalid access token provided');
        }
        return false;
    } else {
        $response = json_decode($response, true);
        if (isset($response['description'])) {
            error_log("Request was successful: {$response['description']}\n");
        }
        $response = $response['result'];
    }

    return $response;
}

function apiRequest($method, $parameters) {
    if (!is_string($method)) {
        error_log("Method name must be a string\n");
        return false;
    }

    if (!$parameters) {
        $parameters = array();
    } else if (!is_array($parameters)) {
        error_log("Parameters must be an array\n");
        return false;
    }

    foreach ($parameters as $key => &$val) {
        // encoding to JSON array parameters, for example reply_markup
        if (!is_numeric($val) && !is_string($val)) {
            $val = json_encode($val);
        }
    }
    $url = API_URL.$method.'?'.http_build_query($parameters);

    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($handle, CURLOPT_TIMEOUT, 60);

    return exec_curl_request($handle);
}

function apiRequestJson($method, $parameters) {
    if (!is_string($method)) {
        error_log("Method name must be a string\n");
        return false;
    }

    if (!$parameters) {
        $parameters = array();
    } else if (!is_array($parameters)) {
        error_log("Parameters must be an array\n");
        return false;
    }

    $parameters["method"] = $method;

    $handle = curl_init(API_URL);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($handle, CURLOPT_TIMEOUT, 60);
    curl_setopt($handle, CURLOPT_POST, true);
    curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($parameters));
    curl_setopt($handle, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

    return exec_curl_request($handle);
}

function processMessage($message) {

    // process incoming message
    $message_id = $message['message_id'];
    $chat_id = $message['chat']['id'];
    if (isset($message['text'])) {
        // incoming text message
        $text = $message['text'];

        if (strpos($text, "/start") === 0) {
            apiRequestJson("sendMessage", array('chat_id' => $chat_id, "text" => 'Hello', 'reply_markup' => array(
                'keyboard' => array(array('Hello', 'Hi')),
                'one_time_keyboard' => true,
                'resize_keyboard' => true)));
        } else if ($text === "Hello" || $text === "Hi") {
            apiRequestWebhook("sendMessage", array('chat_id' => $chat_id, "text" => 'Hello', 'reply_markup' => array(
                'keyboard' => array(array('Hello1', 'Hi')),
                'one_time_keyboard' => true,
                'resize_keyboard' => true)));
        } else if (strpos($text, "/stop") === 0) {
            // stop now
        } else {
            apiRequestWebhook("sendMessage", array('chat_id' => $chat_id, "reply_to_message_id" => $message_id, "text" => 'Cool'));
        }
    } else {
        apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => 'I understand only text messages'));
    }
}



define('WEBHOOK_URL', 'https://6a04-192-162-35-235.ngrok.io/test.php');
header('Content-Type: application/json');

if (php_sapi_name() == 'cli') {
    // if run from console, set or delete webhook
    apiRequest('setWebhook', array('url' => isset($argv[1]) && $argv[1] == 'delete' ? '' : WEBHOOK_URL));
    exit;
}


use GuzzleHttp\Client;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Client\ClientInterface;
use Setnemo\Telegram\Api;
use Setnemo\Telegram\ClassStorage;
use Setnemo\Telegram\Configuration;
use Setnemo\Telegram\Telegram;
use Setnemo\Telegram\TelegramBotException;

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

    $d = (new \Setnemo\Telegram\Methods\SendMessage(
        new \Setnemo\Telegram\Methods\DTOs\SendMessage($update->getMessage()->getFrom()->getId(), 'Herak', 'html')
    ))->sendRequestWithResponse();
    var_export($d);
} catch (TelegramBotException|ClientExceptionInterface $e) {
var_export($e);}

//
//if (isset($update["message"])) {
//    processMessage($update["message"]);
//}