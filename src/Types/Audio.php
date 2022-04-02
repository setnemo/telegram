<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JMS\Serializer\Annotation\Type;

/**
 * Class Audio
 *
 * @package Setnemo\Telegram\Types
 */
class Audio
{
    /**
     * @Type("string")
     */
    protected string $file_id;
    /**
     * @Type("string")
     */
    protected string $file_unique_id;
    /**
     * @Type("int")
     */
    protected int $duration;
    /**
     * @Type("string")
     */
    protected string|null $performer;
    /**
     * @Type("string")
     */
    protected string|null $title;
    /**
     * @Type("string")
     */
    protected string|null $file_name;
    /**
     * @Type("string")
     */
    protected string|null $mime_type;
    /**
     * @Type("int")
     */
    protected int|null $file_size;
    /**
     * @Type("Setnemo\Telegram\Types\PhotoSize")
     */
    protected PhotoSize|null $thumb;

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->file_id;
    }

    /**
     * @return string
     */
    public function getFileUniqueId(): string
    {
        return $this->file_unique_id;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return string|null
     */
    public function getPerformer(): ?string
    {
        return $this->performer;
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
    public function getFileName(): ?string
    {
        return $this->file_name;
    }

    /**
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mime_type;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->file_size;
    }

    /**
     * @return PhotoSize|null
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }
}
