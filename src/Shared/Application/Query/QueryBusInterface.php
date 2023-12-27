<?php

namespace App\Shared\Application\Query;

interface QueryBusInterface
{
    public function ask(QueryInterface $message): mixed;
}
