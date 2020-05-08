<?php

namespace App\Tricksy;

use Iterator;

class Alphabet implements Iterator
{
    // public function loopy()
    // {
    //     $arr = ["one", "two", "thee"];
    //     foreach ($arr as $item) {
    //         echo $item;
    //     }
    // }

    public function current()
    {
        return $this;
    }

    public function next()
    {
        return $this;
    }

    public function key()
    {
    }
    public function valid()
    {
    }
    public function rewind()
    {
    }
}
