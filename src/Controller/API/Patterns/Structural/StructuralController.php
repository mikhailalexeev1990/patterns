<?php

namespace App\Controller\API\Patterns\Structural;

use App\Patterns\Structural\Composite\Chain;
use App\Patterns\Structural\Composite\LeafA;
use App\Patterns\Structural\Composite\LeafB;
use App\Patterns\Structural\Composite\LeafC;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/api/v1/patterns/structural', stateless: true)]
class StructuralController extends AbstractController
{
    #[OA\Get(
        path: '/api/v1/patterns/structural/composite',
        operationId: 'patterns_structural_composite',
        summary: 'Composite structural pattern',
        tags: ['Patterns. Structural. Composite'],
        responses: [
            new OA\Response(ref: '#/components/responses/response_204', response: Response::HTTP_NO_CONTENT),
        ]
    )]
    #[Route(path: '/composite', name: 'patterns_structural_composite', methods: [Request::METHOD_GET])]
    public function composite(): JsonResponse
    {
        $chain = new Chain([
            new LeafA(),
            new Chain([
                new LeafB(),
                new Chain([
                    new LeafC(),
                    new Chain([
                        new LeafA(),
                        new LeafB(),
                        new LeafC(),
                    ])
                ])
            ])
        ]);

        $chain->display();

        return $this->json(null, Response::HTTP_NO_CONTENT);
    }
}
