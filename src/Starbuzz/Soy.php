<?php

namespace Kenny\DesignPattern\Starbuzz;

use LogicException;

class Soy extends CondimentDecorator
{

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost(): float
    {
        if ($this->beverage->getSize() == "TALL") {
            return $this->beverage->cost() + 0.15;
        }
        if ($this->beverage->getSize() == "GRANDE") {
            return $this->beverage->cost() + 0.2;
        }
        if ($this->beverage->getSize() == "VENTI") {
            return $this->beverage->cost() + 0.3;
        }
        throw new LogicException("size not set");
    }
}
