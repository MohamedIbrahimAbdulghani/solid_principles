<?php

namespace Classes;

use Interfaces\PlayerInterface;
use Players\ChildClass;
use Players\ParentClass;

class KeeperClass implements PlayerInterface {
    public function keeper() {
        echo "this is keeper function" . "<br>";
    }
    public function play() {
        // echo " Goal Keeper" . "<br>";
        $keeper = new ChildClass();
        echo $keeper->keep();
    }
}