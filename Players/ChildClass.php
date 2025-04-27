<?php

namespace Players;


// this is child class inheritance from parent class
class ChildClass extends ParentClass {
    public function keep() {
        return "Goal Keeper From Child" . "<br>";
    }
}