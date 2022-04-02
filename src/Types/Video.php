<?php

declare(strict_types=1);

namespace Setnemo\Telegram\Types;

use JMS\Serializer\Annotation\Type;

/**
 * Class Video
 *
 * @package Setnemo\Telegram\Types
 */
class Video
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
    protected int $duration;
    /**
     * @Type("Setnemo\Telegram\Types\PhotoSize")
     */
    protected PhotoSize|null $thumb;
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
}
