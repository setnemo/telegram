<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Methods;

use Setnemo\Telegram\Methods\DTOs\TelegramResponse;

/**
 * Interface MethodContract
 *
 * @package Setnemo\Telegram\Methods
 */
interface MethodContract
{
    public function methodName(): string;
    public function printResponse(): void;
    public function sendRequestWithResponse(): TelegramResponse;
}
