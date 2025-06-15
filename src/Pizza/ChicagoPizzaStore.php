<?php

namespace Kenny\DesignPattern\Pizza;


use Kenny\DesignPattern\Pizza\ChicagoPizzaIngredientFactory;
use Kenny\DesignPattern\Pizza\ChicagoStyleCheesePizza;
use Kenny\DesignPattern\Pizza\ChicagoStylePepperoniPizza;
use Kenny\DesignPattern\Pizza\Pizza;
use Kenny\DesignPattern\Pizza\PizzaStore;
use RuntimeException;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $factory = new ChicagoPizzaIngredientFactory();
        if ($type == 'cheese') {
            return new ChicagoStyleCheesePizza($factory);
        }
        if ($type == 'pepperoni') {
            return new ChicagoStylePepperoniPizza($factory);
        }
        throw new RuntimeException(sprintf("type: %s invalid", $this->type));
    }
}