<?php

namespace Kenny\DesignPattern\RPG;

class SwordBehavior implements WeaponBehavior
{
    public function attack()
    {
        return "sword";
    }
}