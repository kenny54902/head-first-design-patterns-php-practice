<?php

namespace Kenny\DesignPattern\Duck;

abstract class Duck
{
    protected FlyBehavior $flyBehavior;

    protected QuackBehavior $quackBehavior;

    public function __construct() {}

    abstract public function display();

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function swim()
    {
        return "All ducks float, event decoys!";
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }
}