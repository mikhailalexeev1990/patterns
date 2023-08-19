<?php

namespace App\Controller;

use OpenApi\Attributes as OA;
use OpenApi\Generator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[OA\Info(
    version: '1.0.0',
    title: 'Patterns API',
)]
#[OA\Server(
    url: 'http://localhost:100',
    description: 'Local server',
)]
#[OA\SecurityScheme(
    securityScheme: 'bearerAuth',
    type: 'http',
    in: 'header',
    bearerFormat: 'JWT',
    scheme: 'bearer',
)]
#[OA\Response(response: 'response_200', description: 'OK')]
#[OA\Response(response: 'response_204', description: 'No Content')]
#[OA\Response(response: 'response_404', description: 'Not Found')]
class SwaggerController extends AbstractController
{
    #[Route(path: '/api/doc', name: 'swagger_ui', methods: [Request::METHOD_GET])]
    public function getUI(): Response
    {
        return $this->render(
            '/swagger/swagger.html.twig',
            [
                'url' => $this->generateUrl('swagger_json'),
            ]
        );
    }

    #[Route(path: '/api/doc.json', name: 'swagger_json', methods: [Request::METHOD_GET])]
    public function getJson(): Response
    {
        $openApi = Generator::scan([
            __DIR__ . '/../Controller',
            __DIR__ . '/../Patterns',
        ]);

        return new Response($openApi?->toJson());
    }
}
