<?php

namespace Kenny\DesignPattern\Starbuzz;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = "DarkRoast";
    }

    public function cost(): float
    {
        return 0.99;
    }
}
