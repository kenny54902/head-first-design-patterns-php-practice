<?php

namespace Kenny\DesignPattern\Duck;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        return "Squeak";
    }
}