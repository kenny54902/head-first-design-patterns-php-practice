<?php

namespace Kenny\DesignPattern\RPG;

class Queen extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new SwordBehavior();
    }

    public function display()
    {
        return "queen";
    }
}