<?php

namespace App\Shapes;

class Square implements ShapeInterface
{
    private $dim;

    public function __construct($dim)
    {
        $this->dim = $dim;
    }

    public function area(): float
    {
        return $this->dim * $this->dim;
    }
}
