<?php

namespace Kenny\DesignPattern\Pizza;

class PizzaTestDrive
{
    public function __construct()
    {
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();
        $pizza = $nyStore->orderPizza('cheese');
        echo $pizza->toString();
        $pizza2 = $chicagoStore->orderPizza('cheese');
        echo $pizza2->toString();
    }
}