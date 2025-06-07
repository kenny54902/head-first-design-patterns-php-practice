<?php

namespace Kenny\DesignPattern\RPG;

class KnifeBehavior implements WeaponBehavior
{
    public function attack()
    {
        return "knife";
    }
}