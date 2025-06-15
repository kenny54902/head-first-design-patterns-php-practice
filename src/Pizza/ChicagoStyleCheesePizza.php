<?php

namespace Kenny\DesignPattern\Pizza;

use Kenny\DesignPattern\Pizza\Pizza;
use Kenny\DesignPattern\Pizza\PizzaIngredientFactory;

class ChicagoStyleCheesePizza extends Pizza
{
    protected PizzaIngredientFactory $factory;

    public function __construct(PizzaIngredientFactory $factory)
    {
        $this->name = "Chicago Style Deep Dish Cheese Pizza";
        $this->factory = $factory;
    }

    public function prepare()
    {
        echo sprintf("Preparing %s \n", $this->name);
        $this->dough = $this->factory->createDough();
        $this->sauce = $this->factory->createSauce();
        $this->cheese = $this->factory->createCheese();
        $this->pepperoni = $this->factory->createpepperoni();
        $this->clam = $this->factory->createClam();
    }
}