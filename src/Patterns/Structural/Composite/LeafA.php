<?php

namespace App\Patterns\Structural\Composite;

class LeafA implements InterfaceComposite
{
    public function display(): void
    {
        echo 'Leaf A';
    }
}
