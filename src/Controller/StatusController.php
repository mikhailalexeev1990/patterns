<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Attributes as OA;

#[Route(stateless: true)]
class StatusController
{
    #[OA\Get(
        path: '/healthcheck',
        operationId: 'healthcheck',
        summary: 'healthcheck',
        tags: ['Technical'],
        responses: [
            new OA\Response(
                response: 200,
                description: '',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'status', example: 'ok'),
                    ],
                )
            ),
        ]
    )]
    #[Route('/healthcheck', name: 'healthcheck', methods: [Request::METHOD_GET])]
    public function healthcheck(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}
