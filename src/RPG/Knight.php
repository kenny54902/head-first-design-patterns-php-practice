<?php

namespace Kenny\DesignPattern\RPG;

class Knight extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new SwordBehavior();
    }

    public function display()
    {
        return "knight";
    }
}