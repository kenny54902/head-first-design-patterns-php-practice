<?php

namespace Kenny\DesignPattern\Composite;

use Kenny\DesignPattern\Composite\MenuComponent;

class MenuItem extends MenuComponent
{
    private string $name;

    private string $desc;

    private bool $vegetarian;

    private float $price;

    public function __construct(string $name, string $desc, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDesc(): string
    {
        return $this->desc;
    }


    public function getPrice(): float
    {
        return $this->price;
    }

    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    public function print()
    {
        echo sprintf(
            "%s:%s/(v:%s)/desc:%s",
            $this->getName(),
            $this->getPrice(),
            $this->isVegetarian() ? "true" : "false",
            $this->getDesc()
        );
    }
}
