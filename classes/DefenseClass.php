<?php

namespace Classes;

use Interfaces\DefenseInterface;
use Interfaces\PlayerInterface;

class DefenseClass implements DefenseInterface {
    public function Defense() {
        echo "Play Ya Defense" . "<br>";
    }
}