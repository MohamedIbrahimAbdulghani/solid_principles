<?php

namespace Classes;


class MatchClass {
    private $attack;
    private $defense;
    private $keeper;

    
    public function __construct()
    {
        $this->attack = new AttackClass();
        $this->defense = new DefenseClass();
        $this->keeper = new KeeperClass();
    }
    public function start() {
        echo "Start Play" . "<br>";
    }
}