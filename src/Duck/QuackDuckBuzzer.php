<?php

namespace Kenny\DesignPattern\Duck;

class QuackDuckBuzzer extends DuckBuzzer
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
    }
}