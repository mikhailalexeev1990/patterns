<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Query;

use App\Shared\Application\Query\QueryBusInterface;
use App\Shared\Application\Query\QueryInterface;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

final class MessengerQueryBus implements QueryBusInterface
{
    use HandleTrait;

    public function __construct(MessageBusInterface $queryBus,)
    {
        $this->messageBus = $queryBus;
    }

    public function ask(QueryInterface $message): mixed
    {
        return $this->handle($message);
    }
}
