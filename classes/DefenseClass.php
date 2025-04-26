<?php

namespace Classes;

use Interfaces\PlayerInterface;

class DefenseClass implements PlayerInterface {
    public function defense() {
        echo "this is defense function" . "<br>";
    }
    public function play() {
        echo "Play Ya Defense" . "<br>";
    }
}