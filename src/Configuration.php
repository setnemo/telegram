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
    private string|null $webhookUrl;

    public function __construct(string $botToken, string $webhookUrl = null)
    {
        $this->botToken   = $botToken;
        $this->webhookUrl = $webhookUrl;
    }

    /**
     * @return string
     */
    public function getBotToken(): string
    {
        return $this->botToken;
    }

    /**
     * @return string|null
     */
    public function getWebhookUrl(): ?string
    {
        return $this->webhookUrl;
    }

    /**
     * @return array
     */
    public function getMiddlewares(): array
    {
        return [];
    }

    /**
     * @return bool
     */
    public function isWebhookRequest(): bool
    {
        return true;
    }
}
