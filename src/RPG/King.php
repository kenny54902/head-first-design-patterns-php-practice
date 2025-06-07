<?php

namespace Kenny\DesignPattern\RPG;

class King extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new SwordBehavior();
    }

    public function display()
    {
        return "king";
    }
}