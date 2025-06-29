<?php

use Kenny\DesignPattern\Composite\Menu;
use Kenny\DesignPattern\Composite\MenuItem;
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase
{
    public function testMenu()
    {
        $cafeMenu = new Menu("cafeMenu", "cafe menu desc");
        $cafeMenuItems = [
            new MenuItem("cafe item1", "cafe desc1", false, 100),
            new MenuItem("cafe item2", "cafe desc2", true, 200),
        ];
        foreach ($cafeMenuItems as $menuItem) {
            $cafeMenu->add($menuItem);
        }


        $dessertMenu = new Menu("dessertMenu", "dessert menu desc");
        $dessertMenuItems = [
            new MenuItem("dessert item1", "dessert desc1", false, 100),
            new MenuItem("dessert item2", "dessert desc2", true, 200),
        ];
        foreach ($dessertMenuItems as $menuItem) {
            $dessertMenu->add($menuItem);
        }

        $allMenu = new Menu("all menu", "all menu");
        $allMenu->add($cafeMenu);
        $allMenu->add($dessertMenu);
        ob_start();
        $allMenu->print();
        $output = ob_get_clean();
        $this->assertStringContainsString('dessert item1', $output);
        $this->assertStringContainsString('cafe item1', $output);
    }
}
