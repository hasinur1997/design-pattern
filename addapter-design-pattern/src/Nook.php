<?php
namespace App;

use App\eReaderInterface;

class Nook implements eReaderInterface {

    public function turnOn()
    {
        var_dump("turn the Nook on");
    }

    public function pressNextButton()
    {
        var_dump("Press the next button of the Nook");
    }
}