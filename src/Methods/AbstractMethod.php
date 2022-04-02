<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Methods;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use JMS\Serializer\Serializer;
use Setnemo\Telegram\Configuration;

/**
 * Class AbstractMethod
 *
 * @param  Configuration  $configuration
 * @param  Serializer|null  $serializer
 * @param  ClientInterface|null  $client
 * @package Setnemo\Telegram\Methods\DTOs
 */
class AbstractMethod implements MethodContract
{
    public const API_TELEGRAM = 'https://api.telegram.org/bot';
    public const URI_PATTERN = ':host:token/:method';
    public const JSON = 'json';
    public const METHOD_NAME = '';

    protected DTOs\SendMessage $dto;

    /**
     * @param  Configuration  $configuration
     * @param  Serializer|null  $serializer
     * @param  ClientInterface|null  $client
     */
    public function __construct(
        protected Configuration $configuration,
        protected Serializer|null $serializer,
        protected ClientInterface|null $client
    )
    {
    }

    /**
     * @return string
     */
    public function methodName(): string
    {
        return static::METHOD_NAME;
    }

    public function printResponse(): void
    {
        header('Content-Type: application/json');
        echo $this->serializer->serialize(static::getDto()->toArray(), self::JSON);
    }

    /**
     * @throws ClientExceptionInterface
     */
    public function sendRequestWithResponse(): DTOs\TelegramResponse
    {
        $response = $this->client->sendRequest(new Request(
            \Symfony\Component\HttpFoundation\Request::METHOD_POST,
            $this->buildUri(static::getDto()->toArray()),
            ['Content-Type' => 'application/json'],
        ));

        return $this->serializer->deserialize($response->getBody()->getContents(), DTOs\TelegramResponse::class, 'json');
    }

    /**
     * @return DTOs\SendMessage|null
     */
    public function getDto(): DTOs\SendMessage|null
    {
        return $this->dto;
    }

    /**
     * @param  array  $parameters
     *
     * @return string
     */
    private function buildUri(array $parameters): string
    {
        return strtr(self::URI_PATTERN, [
            ':host' => self::API_TELEGRAM,
            ':token' => $this->configuration->getBotToken(),
            ':method' => $this->methodName(),
        ]) . '?' . http_build_query($parameters);
    }
}
