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

    public function display(): string
    {
        $displayItems = '';

        foreach ($this->items as $item) {
            $displayItems .= $item->display();
        }

        return 'Chain of [' . $displayItems . ']' . PHP_EOL;
    }
}
