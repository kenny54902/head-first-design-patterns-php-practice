<?php

namespace Kenny\DesignPattern\RPG;

class BowAndArrowBehavior implements WeaponBehavior
{
    public function attack()
    {
        return "shoot";
    }
}