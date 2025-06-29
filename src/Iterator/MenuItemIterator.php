<?php

namespace Kenny\DesignPattern\Iterator;

class MenuItemIterator implements Iterator
{
    private array $menuItems = [];

    private int $index = 0;

    public function __construct(array $menuItems)
    {
        $this->menuItems = $menuItems;
    }
    public function hasNext(): bool
    {
        return $this->index < count($this->menuItems) - 1;
    }

    public function next(): MenuItem
    {
        return $this->menuItems[$this->index++];
    }
}
