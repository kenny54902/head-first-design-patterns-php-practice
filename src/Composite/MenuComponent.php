<?php

namespace Kenny\DesignPattern\Composite;




abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent)
    {
        throw new UnSupportOperationException("");
    }

    public function remove(MenuComponent $menuComponent)
    {
        throw new UnSupportOperationException("");
    }

    public function getChild(int $i): MenuComponent
    {
        throw new UnSupportOperationException("");
    }

    public function getName(): string
    {
        throw new UnSupportOperationException("");
    }

    public function getDescription(): string
    {
        throw new UnSupportOperationException("");
    }

    public function getPrice(): float
    {
        throw new UnSupportOperationException("");
    }

    public function isVegetarian(): bool
    {
        throw new UnSupportOperationException("");
    }

    public function print()
    {
        throw new UnSupportOperationException("");
    }
}
