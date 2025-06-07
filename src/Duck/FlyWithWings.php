<?php

namespace Kenny\DesignPattern\Duck;

class FlyWithWings  implements FlyBehavior
{
    public function fly()
    {
        return "I'm flying";
    }
}