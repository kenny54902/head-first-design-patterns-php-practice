<?php

namespace Kenny\DesignPattern\RPG;

class Troll extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new BowAndArrowBehavior();
    }

    public function display()
    {
        return "troll";
    }
}