<?php

namespace Kenny\DesignPattern\Compound;

use Iterator;
use Kenny\DesignPattern\Compound\QuackAble;

class QuackList implements Iterator
{
    private $items = [];
    private $index = 0;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function current(): mixed
    {
        return $this->items[$this->index];
    }

    public function key(): int
    {
        return $this->index;
    }

    public function next(): void
    {
        $this->index++;
    }

    public function rewind(): void
    {
        $this->index = 0;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->index]);
    }

    public function add(QuackAble $quackAble)
    {
        $this->items[] = $quackAble;
    }
}
