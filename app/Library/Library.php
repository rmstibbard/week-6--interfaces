<?php

namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
    }

    public function addShelf(Shelf $shelf): Library
    {
        $this->shelves->push($shelf);
        return $this;
    }


    // ** Using array:
    public function titles()
    {
        $names = [];

        foreach ($this->shelves as $shelf) {

            $names = array_merge($names, $shelf->titles());
        }

        return $names;
    }

    // ** Using collection; I don't understand the syntax!
    // public function titles()      
    // {
    //     return $this->shelves->reduce(function ($books, $shelf) {
    //         return $books->merge($shelf->titles());
    //     }, collect())->all();
    // }
}