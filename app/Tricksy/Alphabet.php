<?php

namespace App\Tricksy;

use Iterator;     // Need 'use' before 'implements'

class Alphabet implements Iterator  // I DON'T UNDERSTAND THIS - ALL COPIED FROM ANSWERS!!
{
    private $code;

    public function __construct()
    {
        //  $this->rewind();      // Not needed??
    }

    public function current()
    {
        return chr($this->code);
    }

    public function key()
    {
        return $this->code - 65;
    }

    public function next()
    {
        $this->code += 1;
    }

    public function rewind()
    {
        $this->code = 65;
    }

    public function valid()
    {
        return $this->code >= 65 && $this->code <= 90;
    }
}
