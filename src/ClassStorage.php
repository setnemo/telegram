<?php

declare(strict_types=1);

namespace Setnemo\Telegram;

use JMS\Serializer\Serializer;

use Psr\Http\Client\ClientInterface;

/**
 * Class ClassStorage
 *
 * @package Setnemo\Telegram
 */
class ClassStorage
{
    protected const ALLOWED_CLASSES = [
        ClassStorage::class,
        Configuration::class,
        Api::class,
        Telegram::class,
        Serializer::class,
        ClientInterface::class,
    ];
    protected static array $instances = [];

    protected function __construct()
    {
        // do nothing
    }

    protected function __clone()
    {
        // do nothing
    }

    /**
     * @throws TelegramBotException
     */
    public function __sleep()
    {
        throw new TelegramBotException("Cannot serialize ClassStorage.");
    }

    /**
     * @throws TelegramBotException
     */
    public function __wakeup()
    {
        throw new TelegramBotException("Cannot deserialize ClassStorage.");
    }

    /**
     * @param  string|null  $class
     * @param  object|null  $current
     *
     * @return ClassStorage|Configuration|Api|Telegram|Serializer|ClientInterface
     * @throws TelegramBotException
     */
    public static function instance(string $class = null, object $current = null):
    ClassStorage|Configuration|Api|Telegram|Serializer|ClientInterface
    {
        if (!in_array($class, self::ALLOWED_CLASSES)) {
            throw new TelegramBotException('Class not allowed.');
        }
        if ($current instanceof $class) {
            self::$instances[$class] = $current;
        }

        if (!isset(self::$instances[$class])) {
            if (ClassStorage::class === $class) {
                self::$instances[$class] = new static();
            } else {
                throw new TelegramBotException("Storage hasn't $class. Before using need to add it via second param.");
            }
        }

        return self::$instances[$class];
    }
}
