<?php

namespace App\Library;

class Shelf
{
    private $items = [];  // Set empty $items array

    public function addItem(Titled $item): Shelf
    {
        $this->items[] = $item; // Add a new item to $items array 
        return $this;
    }

    public function titles(): array
    {
        $names = [];  // Use a different name than "titles"

        foreach ($this->items as $item) {
            $names[] = $item->title();
        }

        return $names;
    }
}
