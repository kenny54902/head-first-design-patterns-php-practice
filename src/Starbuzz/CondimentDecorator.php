<?php

namespace Kenny\DesignPattern\Starbuzz;

abstract class CondimentDecorator extends Beverage
{
    protected Beverage $beverage;



    public function getSize()
    {
        return $this->beverage->getSize();
    }
}
