<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JetBrains\PhpStorm\Pure;
use JMS\Serializer\Annotation\Type;

/**
 * Class MessageEntity
 *
 * @package Setnemo\Telegram\Types
 */
class MessageEntity
{
    /**
     * @Type("string")
     */
    protected string $type;
    /**
     * @Type("int")
     */
    protected int $offset;
    /**
     * @Type("int")
     */
    protected int $length;
    /**
     * @Type("int")
     */
    protected int|null $file_size;
    /**
     * @Type("string")
     */
    protected string|null $url;
    /**
     * @Type("Setnemo\Telegram\Types\User")
     */
    protected User|null $user;
    /**
     * @Type("string")
     */
    protected string|null $language;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @return bool
     */
    #[Pure] public function isCommand(): bool
    {
        return $this->getType() === 'bot_command';
    }
}
