<?php
namespace App;

use App\eReaderInterface;

class Kindle implements eReaderInterface {
    public function turnOn()
    {
        var_dump("turn the kindle on.");
    }

    public function pressNextButton() 
    {
        var_dump("press next button of the kindle.");
    }
}