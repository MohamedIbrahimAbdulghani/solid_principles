<?php

namespace Classes;


class MatchClass {
    private $attack;
    private $defense;
    private $keeper;
    private $PlayersList;
    
    public function __construct(array $players)
    {
        $this->attack = new AttackClass();
        $this->defense = new DefenseClass();
        $this->keeper = new KeeperClass();

        $this->PlayersList = $players;
    }
    public function start() {
        echo "Start Match" . "<br>";
        foreach($this->PlayersList as $player) {
            $player->play();
        }
    }
}