<?php

namespace Kenny\DesignPattern\Pizza;

use Kenny\DesignPattern\Pizza\NYPizzaIngredientFactory;
use Kenny\DesignPattern\Pizza\NYStyleCheesePizza;
use Kenny\DesignPattern\Pizza\NYStylePepperoniPizza;
use Kenny\DesignPattern\Pizza\Pizza;

use Kenny\DesignPattern\Pizza\PizzaStore;
use RuntimeException;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $factory = new NYPizzaIngredientFactory();
        if ($type == 'cheese') {
            return new NYStyleCheesePizza($factory);
        }
        if ($type == 'pepperoni') {
            return new NYStylePepperoniPizza($factory);
        }
        throw new RuntimeException(sprintf("type: %s invalid", $this->type));
    }
}