<?php

namespace Kenny\DesignPattern\RPG;

use Kenny\DesignPattern\RPG\WeaponBehavior as WeaponBehavior;

abstract class Character
{

    protected WeaponBehavior $weaponBehavior;

    public abstract function display();

    public function useWeapon()
    {
        return $this->weaponBehavior->attack();
    }
}