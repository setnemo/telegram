<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JMS\Serializer\Annotation\Type;

/**
 * Class Chat
 *
 * @package Setnemo\Telegram\Types
 */
class Chat
{
    /**
     * @Type("int")
     */
    protected int $id;
    /**
     * @Type("string")
     */
    protected string $type;
    /**
     * @Type("string")
     */
    protected string|null $title;
    /**
     * @Type("string")
     */
    protected string|null $username;
    /**
     * @Type("string")
     */
    protected string|null $first_name;
    /**
     * @Type("string")
     */
    protected string|null $last_name;
    /**
     * @Type ("ChatPhoto")
     */
    protected ChatPhoto|null $photo;
    /**
     * @Type ("string")
     */
    protected string|null $bio;
    /**
     * @Type ("bool")
     */
    protected bool|null $has_private_forwards;
    /**
     * @Type ("string")
     */
    protected string|null $description;
    /**
     * @Type ("string")
     */
    protected string|null $invite_link;
    /**
     * @Type ("Message")
     */
    protected Message|null $pinned_message;
    /**
     * @Type ("ChatPermissions")
     */
    protected ChatPermissions|null $permissions;
    /**
     * @Type ("int")
     */
    protected int|null $slow_mode_delay;
    /**
     * @Type ("int")
     */
    protected int|null $message_auto_delete_time;
    /**
     * @Type ("bool")
     */
    protected bool|null $has_protected_content;
    /**
     * @Type ("string")
     */
    protected string|null $sticker_set_name;
    /**
     * @Type ("bool")
     */
    protected bool|null $can_set_sticker_set;
    /**
     * @Type ("int")
     */
    protected int|null $linked_chat_id;
    /**
     * @Type ("ChatLocation")
     */
    protected ChatLocation|null $location;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    /**
     * @return ChatPhoto|null
     */
    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    /**
     * @return string|null
     */
    public function getBio(): ?string
    {
        return $this->bio;
    }

    /**
     * @return bool|null
     */
    public function getHasPrivateForwards(): ?bool
    {
        return $this->has_private_forwards;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getInviteLink(): ?string
    {
        return $this->invite_link;
    }

    /**
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinned_message;
    }

    /**
     * @return ChatPermissions|null
     */
    public function getPermissions(): ?ChatPermissions
    {
        return $this->permissions;
    }

    /**
     * @return int|null
     */
    public function getSlowModeDelay(): ?int
    {
        return $this->slow_mode_delay;
    }

    /**
     * @return int|null
     */
    public function getMessageAutoDeleteTime(): ?int
    {
        return $this->message_auto_delete_time;
    }

    /**
     * @return bool|null
     */
    public function getHasProtectedContent(): ?bool
    {
        return $this->has_protected_content;
    }

    /**
     * @return string|null
     */
    public function getStickerSetName(): ?string
    {
        return $this->sticker_set_name;
    }

    /**
     * @return bool|null
     */
    public function getCanSetStickerSet(): ?bool
    {
        return $this->can_set_sticker_set;
    }

    /**
     * @return int|null
     */
    public function getLinkedChatId(): ?int
    {
        return $this->linked_chat_id;
    }

    /**
     * @return ChatLocation|null
     */
    public function getLocation(): ?ChatLocation
    {
        return $this->location;
    }
}
