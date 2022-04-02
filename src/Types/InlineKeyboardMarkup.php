<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JMS\Serializer\Annotation\Type;

/**
 * Class ReplyMarkup
 *
 * @package Setnemo\Telegram\Types
 */
class InlineKeyboardMarkup
{
    /**
     * @Type("array<array<Setnemo\Telegram\Types\InlineKeyboard>>")
     */
    protected array $inline_keyboard;

    /**
     * @return array
     */
    public function getInlineKeyboard(): array
    {
        return $this->inline_keyboard;
    }
}
