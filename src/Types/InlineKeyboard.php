<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JMS\Serializer\Annotation\Type;

/**
 * Class InlineKeyboard
 *
 * @package Setnemo\Telegram\Types
 */
class InlineKeyboard
{
    /**
     * @Type("string")
     */
    protected string $text;
    /**
     * @Type("string")
     */
    protected string $callback_data;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getCallbackData(): string
    {
        return $this->callback_data;
    }
}
