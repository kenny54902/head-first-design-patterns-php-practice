<?php

namespace Kenny\DesignPattern\Duck;

class MiniDuckSimulator
{
    public function __construct()
    {
        $mallard = new MallardDuck();
        echo $mallard->performQuack();
        echo $mallard->performFly();

        echo "\n";

        $modelDuck = new ModelDuck();
        echo $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new FlyRocketPowered());
        echo $modelDuck->performFly();
    }
}