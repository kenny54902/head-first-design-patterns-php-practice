<?php

use Kenny\DesignPattern\Iterator\Menu;
use Kenny\DesignPattern\Iterator\MenuItem;
use PHPUnit\Framework\TestCase;



class IteratorTest extends TestCase
{
    public function testIterator()
    {
        $menu = new Menu();
        $items = [
            new MenuItem("item1", 100),
            new MenuItem("item2", 200),
        ];

        foreach ($items as $item) {
            $menu->addItem($item);
        }

        $iterator =  $menu->createIterator();
        $index = 0;
        while ($iterator->hasNext()) {
            $item = $iterator->next();
            $this->assertEquals($items[$index], $item);
            $index++;
        }
    }
}
