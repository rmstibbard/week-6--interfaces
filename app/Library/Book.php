<?php

namespace App\Library;

class Book implements Titled
{
    private $title;
    private $pages;
    private $current = 1;  // First page is p. 1

    public function __construct(string $title, int $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function title(): string
    {
        return $this->title;
    }
}
