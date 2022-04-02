<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Methods\DTOs;

use Setnemo\Telegram\Types\ForceReply;
use Setnemo\Telegram\Types\InlineKeyboardMarkup;
use Setnemo\Telegram\Types\ReplyKeyboardMarkup;
use Setnemo\Telegram\Types\ReplyKeyboardRemove;

/**
 * Class SendMessage
 * @param  int|string  $chat_id
 * @param  string  $text
 * @param  string|null  $parse_mode
 * @param  array|null  $entities
 * @param  bool|null  $disable_web_page_preview
 * @param  bool|null  $disable_notification
 * @param  bool|null  $protect_content
 * @param  int|null  $reply_to_message_id
 * @param  bool|null  $allow_sending_without_reply
 * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null  $reply_markup
 * @package Setnemo\Telegram\Types
 */
class SendMessage
{
    private string $method = \Setnemo\Telegram\Methods\SendMessage::METHOD_NAME;
    /**
     * @param  int|string  $chat_id
     * @param  string  $text
     * @param  string|null  $parse_mode
     * @param  array|null  $entities
     * @param  bool|null  $disable_web_page_preview
     * @param  bool|null  $disable_notification
     * @param  bool|null  $protect_content
     * @param  int|null  $reply_to_message_id
     * @param  bool|null  $allow_sending_without_reply
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null  $reply_markup
     */
    public function __construct(
        protected int|string $chat_id,
        protected string $text,
        protected string|null $parse_mode = null,
        protected array|null $entities = null,
        protected bool|null $disable_web_page_preview = null,
        protected bool|null $disable_notification = null,
        protected bool|null $protect_content = null,
        protected int|null $reply_to_message_id = null,
        protected bool|null $allow_sending_without_reply = null,
        protected InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null
    )
    {
    }

    /**
     * Unique identifier for the target chat or username of the target channel (in the format (at)channelusername)
     *
     * @return int|string
     */
    public function getChatId(): int|string
    {
        return $this->chat_id;
    }

    /**
     * Text of the message to be sent, 1-4096 characters after entities parsing
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Optional
     * Mode for parsing entities in the message text. See formatting options for more details.
     *
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parse_mode;
    }

    /**
     * Optional
     * A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     *
     * @return array|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * Optional
     * Disables link previews for links in this message
     *
     * @return bool|null
     */
    public function getDisableWebPagePreview(): ?bool
    {
        return $this->disable_web_page_preview;
    }

    /**
     * Optional
     * Sends the message silently. Users will receive a notification with no sound.
     *
     * @return bool|null
     */
    public function getDisableNotification(): ?bool
    {
        return $this->disable_notification;
    }

    /**
     * Optional
     * Protects the contents of the sent message from forwarding and saving
     *
     * @return bool|null
     */
    public function getProtectContent(): ?bool
    {
        return $this->protect_content;
    }

    /**
     * Optional
     * If the message is a reply, ID of the original message
     *
     * @return int|null
     */
    public function getReplyToMessageId(): ?int
    {
        return $this->reply_to_message_id;
    }

    /**
     * Optional
     * Pass True, if the message should be sent even if the specified replied-to message is not found
     *
     * @return bool|null
     */
    public function getAllowSendingWithoutReply(): ?bool
    {
        return $this->allow_sending_without_reply;
    }

    /**
     * Optional
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null
     */
    public function getReplyMarkup(): ReplyKeyboardRemove|ReplyKeyboardMarkup|ForceReply|InlineKeyboardMarkup|null
    {
        return $this->reply_markup;
    }

    public function toArray(): array
    {
        $result = [];
        foreach ($this as $key => $value) {
            $result[$key] = $value;
        }

        return $result;
    }
}

