<?php

namespace App\Patterns\Structural\Composite;

readonly class Chain implements InterfaceComposite
{
    /**
     * @param InterfaceComposite[] $items
     */
    public function __construct(public array $items = [])
    {
    }

    public function display(): void
    {
        echo 'Chain';

        foreach ($this->items as $item) {
            $item->display();
        }
    }
}
