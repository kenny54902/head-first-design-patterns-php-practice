<?php

namespace Test;

use Kenny\DesignPattern\Pizza\PizzaTestDrive;
use PHPUnit\Framework\TestCase;

class PizzaTest extends TestCase
{
    public function testPizza()
    {
        ob_start();
        new PizzaTestDrive();
        $output = ob_get_clean();
        $this->assertStringContainsString('Chicago Style Deep Dish Cheese Pizza', $output);
        $this->assertStringContainsString('NY Style Sauce and Cheese Pizza', $output);
        $this->assertStringContainsString('FrozenClams', $output);
        $this->assertStringContainsString('FreshClams', $output);
    }
}