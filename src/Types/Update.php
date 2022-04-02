<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JMS\Serializer\Annotation\Type;

/**
 * Class Update
 *
 * @package Setnemo\Telegram\Types
 */
class Update
{
    /**
     * @Type("int")
     */
    protected int $update_id;

    /**
     * @Type("Setnemo\Telegram\Types\Message")
     */
    protected Message $message;

    /**
     * @Type("Setnemo\Telegram\Types\CallbackQuery")
     */
    protected CallbackQuery $callback_query;

    /**
     * @return int
     */
    public function getUpdateId(): int
    {
        return $this->update_id;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }

    /**
     * @return CallbackQuery
     */
    public function getCallbackQuery(): CallbackQuery
    {
        return $this->callback_query;
    }
}
