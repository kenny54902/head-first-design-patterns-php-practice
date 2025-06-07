<?php

namespace Kenny\DesignPattern\Duck;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        return "I can't fly";
    }
}