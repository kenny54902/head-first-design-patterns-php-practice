<?php

namespace Kenny\DesignPattern\Compound;

class DuckCall extends Duck implements QuackAble
{

    public function doQuack()
    {
        echo "Kwak";
    }
}
