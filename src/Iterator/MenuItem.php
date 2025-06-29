<?php

namespace Kenny\DesignPattern\Iterator;

class MenuItem
{
    private string $itemName;

    private string $itemDesc;

    private $itemPrice;

    public function __construct(string $itemName, int $itemPrice, string $itemDesc = "")
    {
        $this->itemName = $itemName;
        $this->itemPrice = $itemPrice;
        $this->itemDesc = $itemDesc;
    }
}
