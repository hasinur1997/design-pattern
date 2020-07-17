<?php 
namespace App;

class Book implements BookInterface{

    public function open()
    {
        var_dump("openning the paper book");
    }

    public function turnPage()
    {
        var_dump("turning the page of the papper book");
    }
}