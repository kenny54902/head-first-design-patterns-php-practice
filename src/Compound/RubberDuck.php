<?php

namespace Kenny\DesignPattern\Compound;

class RubberDuck extends Duck implements QuackAble
{

    public function doQuack()
    {
        echo "Squeak";
    }
}
