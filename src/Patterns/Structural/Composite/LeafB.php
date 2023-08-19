<?php

namespace App\Patterns\Structural\Composite;

class LeafB implements InterfaceComposite
{
    public function display(): void
    {
        echo 'Leaf B';
    }
}
