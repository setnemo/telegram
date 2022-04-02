<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Methods;

use JMS\Serializer\Serializer;
use Psr\Http\Client\ClientInterface;
use Setnemo\Telegram\ClassStorage;
use Setnemo\Telegram\Configuration;
use Setnemo\Telegram\TelegramBotException;

/**
 * Class SendMessage
 *
 * @package Setnemo\Telegram\Methods
 */
class SendMessage extends AbstractMethod
{
    public const METHOD_NAME = 'sendMessage';

    /**
     * @throws TelegramBotException
     */
    public function __construct(
        protected DTOs\SendMessage $dto
    )
    {
        parent::__construct(
            ClassStorage::instance(Configuration::class),
            ClassStorage::instance(Serializer::class),
            ClassStorage::instance(ClientInterface::class),
        );
    }
}
