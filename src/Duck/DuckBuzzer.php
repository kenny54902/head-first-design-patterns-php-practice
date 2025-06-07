<?php

namespace Kenny\DesignPattern\Duck;

abstract class DuckBuzzer
{
    protected QuackBehavior $quackBehavior;

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }
}