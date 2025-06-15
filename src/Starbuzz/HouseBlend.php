<?php

namespace Kenny\DesignPattern\Starbuzz;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = "HouseBlend";
    }

    public function cost(): float
    {
        return 0.89;
    }
}
