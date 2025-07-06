<?php

namespace Kenny\DesignPattern\Compound;

class RedheadDuck extends Duck implements QuackAble
{
    public function doQuack()
    {
        echo "Quack";
    }
}
