<?php

namespace Kenny\DesignPattern\Duck;

class FlyRocketPowered  implements FlyBehavior
{
    public function fly()
    {
        return "I'm flying with a rocket!";
    }
}