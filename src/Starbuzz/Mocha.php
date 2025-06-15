<?php

namespace Kenny\DesignPattern\Starbuzz;

class Mocha extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.2;
    }
}
