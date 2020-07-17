<?php
namespace App;

use App\Book;
use App\Person;
use App\eReaderAddapter;
use App\Kindle;

class App {

    public function __construct()
    {
        (new Person)->read(new eReaderAddapter(new Kindle));
    }
}