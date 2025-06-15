<?php

namespace Kenny\DesignPattern\Starbuzz;

abstract class Beverage
{
    protected string $description;

    private string $size = "TALL";

    public function getDescription(): string
    {
        return $this->size . ":" . $this->description;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    abstract public function cost(): float;
}
