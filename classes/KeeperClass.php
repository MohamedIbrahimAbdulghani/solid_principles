<?php

namespace Classes;

use Interfaces\KeeperInterface;
use Interfaces\PlayerInterface;
use Players\ChildClass;
use Players\ParentClass;

class KeeperClass implements PlayerInterface, KeeperInterface {
    public function Keeper() {
        // echo " Goal Keeper" . "<br>";
        $keeper = new ChildClass();
        echo $keeper->keep();
    }
    
    public function play() {
        $this->Keeper();
    }
}