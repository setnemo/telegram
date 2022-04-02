<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use DateTime;
use JMS\Serializer\Annotation\Type;

/**
 * Class Message
 *
 * @package Setnemo\Telegram\Types
 */
class Message
{
    /**
     * @Type("int")
     */
    protected int $message_id;
    /**
     * @Type("Setnemo\Telegram\Types\User")
     */
    protected User|null $from;
    /**
     * @Type("Setnemo\Telegram\Types\Chat")
     */
    protected Chat|null $sender_chat;
    /**
     * @Type("Datetime<'U'>")
     */
    protected DateTime $date;
    /**
     * @Type("Setnemo\Telegram\Types\Chat")
     */
    protected Chat $chat;
    /**
     * @Type("Setnemo\Telegram\Types\User")
     */
    protected User|null $forward_from;
    /**
     * @Type("Setnemo\Telegram\Types\Chat")
     */
    protected Chat|null $forward_from_chat;
    /**
     * @Type("int")
     */
    protected int|null $forward_from_message_id;
    /**
     * @Type("string")
     */
    protected string|null $forward_signature;
    /**
     * @Type("string")
     */
    protected string|null $forward_sender_name;
    /**
     * @Type("Datetime<'U'>")
     */
    protected int|null $forward_date;
    /**
     * @Type("bool")
     */
    protected bool|null $is_automatic_forward;
    /**
     * @Type("Setnemo\Telegram\Types\Message")
     */
    protected Message|null $reply_to_message;
    /**
     * @Type("Setnemo\Telegram\Types\User")
     */
    protected User|null $via_bot;
    /**
     * @Type("Datetime<'U'>")
     */
    protected int|null $edit_date;
    /**
     * @Type("bool")
     */
    protected bool|null $has_protected_content;
    /**
     * @Type("string")
     */
    protected string|null $media_group_id;
    /**
     * @Type("string")
     */
    protected string|null $author_signature;
    /**
     * @Type("string")
     */
    protected string|null $text;
    /**
     * @Type("array<Setnemo\Telegram\Types\MessageEntity>")
     */
    protected array|null $Types;
    /**
     * @Type("Setnemo\Telegram\Types\Animation")
     */
    protected Animation|null $animation;
    /**
     * @Type("Setnemo\Telegram\Types\Audio")
     */
    protected Audio|null $audio;
    /**
     * @Type("Setnemo\Telegram\Types\Document")
     */
    protected Document|null $document;
    /**
     * @Type("array<Setnemo\Telegram\Types\PhotoSize>")
     */
    protected array|null $photo;
    /**
     * @Type("Setnemo\Telegram\Types\Sticker")
     */
    protected Sticker|null $sticker;
    /**
     * @Type("Setnemo\Telegram\Types\Video")
     */
    protected Video|null $video;
    /**
     * @Type("Setnemo\Telegram\Types\VideoNote")
     */
    protected VideoNote|null $video_note;
    /**
     * @Type("Setnemo\Telegram\Types\Voice")
     */
    protected Voice|null $voice;
    /**
     * @Type("string")
     */
    protected string|null $caption;
    /**
     * @Type("array<Setnemo\Telegram\Types\MessageEntity>")
     */
    protected MessageEntity|null $caption_Types;
    /**
     * @Type("Setnemo\Telegram\Types\Contact")
     */
    protected Contact|null $contact;
    /**
     * @Type("Setnemo\Telegram\Types\Dice")
     */
    protected Dice|null $dice;
    /**
     * @Type("Setnemo\Telegram\Types\Game")
     */
    protected Game|null $game;
    /**
     * @Type("Setnemo\Telegram\Types\Poll")
     */
    protected Poll|null $poll;
    /**
     * @Type("Setnemo\Telegram\Types\Venue")
     */
    protected Venue|null $venue;
    /**
     * @Type("Setnemo\Telegram\Types\Location")
     */
    protected Location|null $location;
    /**
     * @Type("array<Setnemo\Telegram\Types\User>")
     */
    protected array|null $new_chat_members;
    /**
     * @Type("Setnemo\Telegram\Types\User")
     */
    protected User|null $left_chat_member;
    /**
     * @Type("string")
     */
    protected string|null $new_chat_title;
    /**
     * @Type("array<Setnemo\Telegram\Types\PhotoSize>")
     */
    protected array|null $new_chat_photo;
    /**
     * @Type("bool")
     */
    protected bool|null $delete_chat_photo;
    /**
     * @Type("bool")
     */
    protected bool|null $group_chat_created;
    /**
     * @Type("bool")
     */
    protected bool|null $supergroup_chat_created;
    /**
     * @Type("bool")
     */
    protected bool|null $channel_chat_created;
    /**
     * @Type("Setnemo\Telegram\Types\MessageAutoDeleteTimerChanged")
     */
    protected MessageAutoDeleteTimerChanged|null $message_auto_delete_timer_changed;
    /**
     * @Type("int")
     */
    protected int|null $migrate_to_chat_id;
    /**
     * @Type("int")
     */
    protected int|null $migrate_from_chat_id;
    /**
     * @Type("Setnemo\Telegram\Types\Message")
     */
    protected Message|null $pinned_message;
    /**
     * @Type("Setnemo\Telegram\Types\Invoice")
     */
    protected Invoice|null $invoice;
    /**
     * @Type("Setnemo\Telegram\Types\SuccessfulPayment")
     */
    protected SuccessfulPayment|null $successful_payment;
    /**
     * @Type("string")
     */
    protected string|null $connected_website;
    /**
     * @Type("Setnemo\Telegram\Types\PassportData")
     */
    protected PassportData|null $passport_data;
    /**
     * @Type("Setnemo\Telegram\Types\ProximityAlertTriggered")
     */
    protected ProximityAlertTriggered|null $proximity_alert_triggered;
    /**
     * @Type("Setnemo\Telegram\Types\VoiceChatScheduled")
     */
    protected VoiceChatScheduled|null $voice_chat_scheduled;
    /**
     * @Type("Setnemo\Telegram\Types\VoiceChatStarted")
     */
    protected VoiceChatStarted|null $voice_chat_started;
    /**
     * @Type("Setnemo\Telegram\Types\VoiceChatEnded")
     */
    protected VoiceChatEnded|null $voice_chat_ended;
    /**
     * @Type("Setnemo\Telegram\Types\VoiceChatParticipantsInvited")
     */
    protected VoiceChatParticipantsInvited|null $voice_chat_participants_invited;
    /**
     * @Type("Setnemo\Telegram\Types\InlineKeyboardMarkup")
     */
    protected InlineKeyboardMarkup|null $reply_markup;

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->message_id;
    }

    /**
     * @return User|null
     */
    public function getFrom(): ?User
    {
        return $this->from;
    }

    /**
     * @return Chat|null
     */
    public function getSenderChat(): ?Chat
    {
        return $this->sender_chat;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return User|null
     */
    public function getForwardFrom(): ?User
    {
        return $this->forward_from;
    }

    /**
     * @return Chat|null
     */
    public function getForwardFromChat(): ?Chat
    {
        return $this->forward_from_chat;
    }

    /**
     * @return int|null
     */
    public function getForwardFromMessageId(): ?int
    {
        return $this->forward_from_message_id;
    }

    /**
     * @return string|null
     */
    public function getForwardSignature(): ?string
    {
        return $this->forward_signature;
    }

    /**
     * @return string|null
     */
    public function getForwardSenderName(): ?string
    {
        return $this->forward_sender_name;
    }

    /**
     * @return int|null
     */
    public function getForwardDate(): ?int
    {
        return $this->forward_date;
    }

    /**
     * @return bool|null
     */
    public function getIsAutomaticForward(): ?bool
    {
        return $this->is_automatic_forward;
    }

    /**
     * @return Message|null
     */
    public function getReplyToMessage(): ?Message
    {
        return $this->reply_to_message;
    }

    /**
     * @return User|null
     */
    public function getViaBot(): ?User
    {
        return $this->via_bot;
    }

    /**
     * @return int|null
     */
    public function getEditDate(): ?int
    {
        return $this->edit_date;
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
    public function getMediaGroupId(): ?string
    {
        return $this->media_group_id;
    }

    /**
     * @return string|null
     */
    public function getAuthorSignature(): ?string
    {
        return $this->author_signature;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return array|null
     */
    public function getTypes(): ?array
    {
        return $this->Types;
    }

    /**
     * @return Animation|null
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    /**
     * @return Audio|null
     */
    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    /**
     * @return Document|null
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @return array|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    /**
     * @return Sticker|null
     */
    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    /**
     * @return Video|null
     */
    public function getVideo(): ?Video
    {
        return $this->video;
    }

    /**
     * @return VideoNote|null
     */
    public function getVideoNote(): ?VideoNote
    {
        return $this->video_note;
    }

    /**
     * @return Voice|null
     */
    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return MessageEntity|null
     */
    public function getCaptionTypes(): ?MessageEntity
    {
        return $this->caption_Types;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @return Dice|null
     */
    public function getDice(): ?Dice
    {
        return $this->dice;
    }

    /**
     * @return Game|null
     */
    public function getGame(): ?Game
    {
        return $this->game;
    }

    /**
     * @return Poll|null
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    /**
     * @return Venue|null
     */
    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * @return array|null
     */
    public function getNewChatMembers(): ?array
    {
        return $this->new_chat_members;
    }

    /**
     * @return User|null
     */
    public function getLeftChatMember(): ?User
    {
        return $this->left_chat_member;
    }

    /**
     * @return string|null
     */
    public function getNewChatTitle(): ?string
    {
        return $this->new_chat_title;
    }

    /**
     * @return array|null
     */
    public function getNewChatPhoto(): ?array
    {
        return $this->new_chat_photo;
    }

    /**
     * @return bool|null
     */
    public function getDeleteChatPhoto(): ?bool
    {
        return $this->delete_chat_photo;
    }

    /**
     * @return bool|null
     */
    public function getGroupChatCreated(): ?bool
    {
        return $this->group_chat_created;
    }

    /**
     * @return bool|null
     */
    public function getSupergroupChatCreated(): ?bool
    {
        return $this->supergroup_chat_created;
    }

    /**
     * @return bool|null
     */
    public function getChannelChatCreated(): ?bool
    {
        return $this->channel_chat_created;
    }

    /**
     * @return MessageAutoDeleteTimerChanged|null
     */
    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChanged
    {
        return $this->message_auto_delete_timer_changed;
    }

    /**
     * @return int|null
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrate_to_chat_id;
    }

    /**
     * @return int|null
     */
    public function getMigrateFromChatId(): ?int
    {
        return $this->migrate_from_chat_id;
    }

    /**
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinned_message;
    }

    /**
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * @return SuccessfulPayment|null
     */
    public function getSuccessfulPayment(): ?SuccessfulPayment
    {
        return $this->successful_payment;
    }

    /**
     * @return string|null
     */
    public function getConnectedWebsite(): ?string
    {
        return $this->connected_website;
    }

    /**
     * @return PassportData|null
     */
    public function getPassportData(): ?PassportData
    {
        return $this->passport_data;
    }

    /**
     * @return ProximityAlertTriggered|null
     */
    public function getProximityAlertTriggered(): ?ProximityAlertTriggered
    {
        return $this->proximity_alert_triggered;
    }

    /**
     * @return VoiceChatScheduled|null
     */
    public function getVoiceChatScheduled(): ?VoiceChatScheduled
    {
        return $this->voice_chat_scheduled;
    }

    /**
     * @return VoiceChatStarted|null
     */
    public function getVoiceChatStarted(): ?VoiceChatStarted
    {
        return $this->voice_chat_started;
    }

    /**
     * @return VoiceChatEnded|null
     */
    public function getVoiceChatEnded(): ?VoiceChatEnded
    {
        return $this->voice_chat_ended;
    }

    /**
     * @return VoiceChatParticipantsInvited|null
     */
    public function getVoiceChatParticipantsInvited(): ?VoiceChatParticipantsInvited
    {
        return $this->voice_chat_participants_invited;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }
}
