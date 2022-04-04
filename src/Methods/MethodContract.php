<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Methods;

use Setnemo\Telegram\Methods\DTOs\TelegramResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Interface MethodContract
 *
 * @package Setnemo\Telegram\Methods
 */
interface MethodContract
{
    public function methodName(): string;
    public function createResponse(): JsonResponse;
    public function sendRequestWithResponse();
}
