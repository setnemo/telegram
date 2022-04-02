<?php

declare(strict_types=1);

namespace Setnemo\Telegram;

use Setnemo\Telegram\Types\Update;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Api
 * @package Setnemo\Telegram
 */
class Api
{
    /**
     * @param   Request  $request
     *
     * @return Response
     */
    public function execute(Request $request): Response
    {
        $data = null;
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        /** @var Update $update */
        $update = $serializer->deserialize($request->getContent(), Update::class, 'json');
        if ($update?->getMessage()?->getEntity()?->isCommand()) {
            $data = $this->runCommand($update);
        }
        return new JsonResponse($data, Response::HTTP_OK);
    }

    private function runCommand(Update $update): array
    {

    }
}
