<?php

namespace Classes;

use Interfaces\PlayerInterface;

class AttackClass implements PlayerInterface {
    public function attack() {
        echo "this is attack function" . "<br>";
    }
    public function play() {
        echo "Play Ya Attack" . "<br>";
    }
}