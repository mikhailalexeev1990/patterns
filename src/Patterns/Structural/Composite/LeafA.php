<?php

namespace App\Patterns\Structural\Composite;

class LeafA implements InterfaceComposite
{
    public function display(): string
    {
        return 'Leaf A' . PHP_EOL;
    }
}
