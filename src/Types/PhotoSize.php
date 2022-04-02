<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JMS\Serializer\Annotation\Type;

/**
 * Class PhotoSize
 *
 * @package Setnemo\Telegram\Types
 */
class PhotoSize
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
    protected int $width;
    /**
     * @Type("int")
     */
    protected int $height;
    /**
     * @Type("int")
     */
    protected int|null $file_size;

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
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->file_size;
    }
}
