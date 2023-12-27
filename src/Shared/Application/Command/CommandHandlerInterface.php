<?php

namespace App\Shared\Application\Command;

use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(bus: 'command.bus')]
interface CommandHandlerInterface
{

}
