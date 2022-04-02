<?php

declare(strict_types=1);

namespace Setnemo\Telegram;

/**
 * Class Configuration
 * @package Setnemo\Telegram
 */
class Configuration
{
    private string $botToken;
    private string $botName;

    public function __construct(string $botToken, string $botName)
    {
        $this->botToken = $botToken;
        $this->botName = $botName;
    }

    /**
     * @return string
     */
    public function getBotToken(): string
    {
        return $this->botToken;
    }

    /**
     * @return string
     */
    public function getBotName(): string
    {
        return $this->botName;
    }

    public function getMiddlewares(): array
    {
        return [];
    }
}
