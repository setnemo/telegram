<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JMS\Serializer\Annotation\Type;

/**
 * Class From
 *
 * @package Setnemo\Telegram\Types
 */
class User
{
    /**
     * @Type("int")
     */
    protected int $id;
    /**
     * @Type("bool")
     */
    protected bool $is_bot;
    /**
     * @Type("string")
     */
    protected string $first_name;
    /**
     * @Type("string")
     */
    protected string $last_name;
    /**
     * @Type("string")
     */
    protected string $username;
    /**
     * @Type("string")
     */
    protected string $language_code;
    /**
     * @Type("bool")
     */
    protected bool|null $can_join_groups;
    /**
     * @Type("bool")
     */
    protected bool|null $can_read_all_group_messages;
    /**
     * @Type("bool")
     */
    protected bool|null $supports_inline_queries;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isIsBot(): bool
    {
        return $this->is_bot;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->language_code;
    }

    /**
     * @return bool|null
     */
    public function getCanJoinGroups(): ?bool
    {
        return $this->can_join_groups;
    }

    /**
     * @return bool|null
     */
    public function getCanReadAllGroupMessages(): ?bool
    {
        return $this->can_read_all_group_messages;
    }

    /**
     * @return bool|null
     */
    public function getSupportsInlineQueries(): ?bool
    {
        return $this->supports_inline_queries;
    }
}
