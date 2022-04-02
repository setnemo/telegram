<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Methods\DTOs;

use JMS\Serializer\Annotation\Type;

/**
 * Class TelegramResponse
 *
 * @package Setnemo\Telegram\Methods\DTOs
 */
class TelegramResponse
{
    /**
     * @Type("bool")
     */
    protected bool $ok;

    /**
     * @Type("array")
     */
    protected array $result;

    /**
     * @Type("int")
     */
    protected int $error_code;

    /**
     * @Type("string")
     */
    protected string $description;

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return $this->ok;
    }

    /**
     * @return array|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->error_code;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
}
