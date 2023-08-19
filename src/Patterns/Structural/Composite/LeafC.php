<?php

namespace App\Patterns\Structural\Composite;

class LeafC implements InterfaceComposite
{
    public function display(): void
    {
        echo 'Leaf C';
    }
}
