<?php

namespace App\Patterns\Structural\Composite;

class LeafB implements InterfaceComposite
{
    public function display(): string
    {
        return 'Leaf B' . PHP_EOL;
    }
}
