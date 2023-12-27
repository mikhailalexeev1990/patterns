<?php

declare(strict_types=1);

namespace App\Shared\Application\Query;

use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(bus: 'query.bus')]
interface QueryHandlerInterface
{

}
