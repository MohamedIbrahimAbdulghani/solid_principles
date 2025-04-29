<?php

namespace Classes;

use Interfaces\DefenseInterface;
use Interfaces\PlayerInterface;

class DefenseClass implements PlayerInterface,  DefenseInterface {
    public function Defense() {
        echo "Play Ya Defense" . "<br>";
    }
    public function play() {
        $this->Defense();
    }
}