<?php

namespace App\Patterns\Structural\Composite;

class LeafC implements InterfaceComposite
{
    public function display(): string
    {
        return 'Leaf C' . PHP_EOL;
    }
}
