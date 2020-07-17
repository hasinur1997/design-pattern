<?php 
namespace App;

use App\BookInterface;

class Person {

    public function read(BookInterface $reader)
    {
        $reader->open();
        $reader->turnPage();
    }
}

