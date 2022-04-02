<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JMS\Serializer\Annotation\Type;

/**
 * Class CallbackQuery
 *
 * @package Setnemo\Telegram\Types
 */
class CallbackQuery
{
    /**
     * @Type("string")
     */
    protected string $id;

    /**
     * @Type("Setnemo\Telegram\Types\Message")
     */
    protected Message $message;

    /**
     * @Type("string")
     */
    protected string $chat_instance;

    /**
     * @Type("string")
     */
    protected string $data;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getChatInstance(): string
    {
        return $this->chat_instance;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
}
