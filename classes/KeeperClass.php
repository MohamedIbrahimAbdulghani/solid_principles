<?php

namespace Classes;

use Interfaces\KeeperInterface;
use Interfaces\PlayerInterface;
use Players\ChildClass;
use Players\ParentClass;

class KeeperClass implements KeeperInterface {
    public function Keeper() {
        // echo " Goal Keeper" . "<br>";
        $keeper = new ChildClass();
        echo $keeper->keep();
    }
}