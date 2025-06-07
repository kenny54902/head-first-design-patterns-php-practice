<?php

namespace Kenny\DesignPattern\Duck;

class Quack implements QuackBehavior
{
    public function quack()
    {
        return "Quack";
    }
}