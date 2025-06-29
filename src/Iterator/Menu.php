<?php

namespace Kenny\DesignPattern\Iterator;

class Menu
{
    private array $menuItems = [];

    public function addItem(MenuItem $item): void
    {
        array_push($this->menuItems, $item);
    }

    public function createIterator(): Iterator
    {
        return new MenuItemIterator($this->menuItems);
    }
}
