<?php

use Classes\AttackClass;
use Classes\DefenseClass;
use Classes\KeeperClass;
use Classes\MatchClass;

require __DIR__ . '/../vendor/autoload.php';


$players = [];
// this is to added player as AttackPlayer
for($index=1;$index<=5;$index++) {
    array_push($players, new AttackClass());
}
// this is to added player as DefensePlayer
for($index=1;$index<=5;$index++) {
    array_push($players, new DefenseClass());
}
// this is to added player as keeperPlayer
array_push($players, new KeeperClass());

$match = new MatchClass($players);

$match->start();