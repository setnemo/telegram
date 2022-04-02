<?php

declare(strict_types=1);

namespace Setnemo\Telegram;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Telegram
 * @package Setnemo\Telegram
 */
class Telegram
{
    private Configuration $configuration;
    private Api $api;

    /**
     * @param   Configuration  $configuration
     * @param   Api            $api
     */
    public function __construct(Configuration $configuration, Api $api)
    {
        $this->configuration = $configuration;
        $this->api = $api;
    }

    public function entry(Request $request): Response
    {
        $this->before($request);
        $result = $this->execute($request);
        $this->after($request);

        return $result;
    }

    public function before(Request $request)
    {
        foreach ($this->configuration->getMiddlewares() as $middleware) {
            $middleware->before($request);
        }
    }

    public function after(Request $request)
    {
        foreach ($this->configuration->getMiddlewares() as $middleware) {
            $middleware->after($request);
        }
    }

    public function execute(Request $request): Response
    {
        return $this->api->execute($request);
    }
}
