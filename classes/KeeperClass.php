<?php

namespace Classes;

use Interfaces\PlayerInterface;

class KeeperClass implements PlayerInterface {
    public function keeper() {
        echo "this is keeper function" . "<br>";
    }
    public function play() {
        echo "Play Ya Keeper" . "<br>";
    }
}