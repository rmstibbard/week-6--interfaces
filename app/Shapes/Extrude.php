<?php

namespace App\Shapes;

class Extrude
{
    private $shape;
    private $value;

    public function __construct(ShapeInterface $shape, $value)  // ***ShapeInterface as type declaration ****//
    {
        $this->shape = $shape;
        $this->value = $value;
    }
    public function area()
    {
    }

    public function volume()
    {
        return $this->shape->area() * $this->value;
    }
}
