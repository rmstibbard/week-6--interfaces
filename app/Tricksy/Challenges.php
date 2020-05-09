<?php

namespace App\Tricksy;

class Challenges
{
    public function start()
    {
        echo "\nTricksy Challenges\n";

        $this->alphabet();
        $this->range();
    }

    public function alphabet()
    {
        echo "\n01) Alphabet\n";

        // create new Alphabet object
        $alphabet = new Alphabet();

        // logs A -> Z on separate lines
        foreach ($alphabet as $letter) {     // Class called needs to first 'use' and then 'implement' iterator
            dump($letter);                   // in order to accept a 'foreach' loop from the calling file
        }
    }

    public function range()
    {
        echo "\n02) Range\n";

        // create new Range object
        $range = new Range(10, 50);

        // logs 10 -> 50 on separate lines
        foreach ($range as $n) {
            dump($n);
        }

        // create new Range object
        $range = new Range(1, 5);

        // logs 1 -> 5 on separate lines
        foreach ($range as $n) {
            dump($n);
        }
    }
}
