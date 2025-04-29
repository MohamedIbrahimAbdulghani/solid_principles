<?php

namespace Classes;

use Interfaces\AttackInterface;
use Interfaces\PlayerInterface;

class AttackClass implements PlayerInterface, AttackInterface {
    public function Attack() {
        echo "Play Ya Attack" . "<br>";
    }
    public function play() {
        $this->Attack();
    }
}