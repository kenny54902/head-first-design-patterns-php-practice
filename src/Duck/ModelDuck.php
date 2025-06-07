<?php

namespace Kenny\DesignPattern\Duck;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        return "I'm a model duck";
    }
}