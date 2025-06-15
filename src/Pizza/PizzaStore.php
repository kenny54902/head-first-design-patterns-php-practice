<?php

namespace Kenny\DesignPattern\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza(type: $type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }

    abstract function createPizza(string $type): Pizza;
}