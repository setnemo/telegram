<?php

declare(strict_types=1);

namespace Setnemo\Telegram;

use JMS\Serializer\Serializer;
use Setnemo\Telegram\Types\Update;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Api
 * @package Setnemo\Telegram
 */
class Api
{
    public function __construct(protected Serializer $serializer)
    {
    }

    /**
     * @param  Request  $request
     *
     * @return Response
     * @throws TelegramBotException
     */
    public function execute(Request $request): Response
    {
        /** @var Update $update */
        $update = $this->serializer->deserialize($request->getContent(), Update::class, 'json');

        return (new \Setnemo\Telegram\Methods\SendMessage(
            new \Setnemo\Telegram\Methods\DTOs\SendMessage($update->getMessage()->getFrom()->getId(), 'Herak1')
        ))->createResponse();
    }
}
