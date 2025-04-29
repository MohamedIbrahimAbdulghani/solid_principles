<?php

namespace Classes;

use Interfaces\AttackInterface;
use Interfaces\PlayerInterface;

class AttackClass implements AttackInterface {
    public function Attack() {
        echo "Play Ya Attack" . "<br>";
    }
}