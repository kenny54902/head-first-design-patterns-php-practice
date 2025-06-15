<?php

namespace Kenny\DesignPattern\Pizza;

use Kenny\DesignPattern\Pizza\Pizza;
use Kenny\DesignPattern\Pizza\PizzaIngredientFactory;

class ChicagoStylePepperoniPizza extends Pizza
{
    protected PizzaIngredientFactory $factory;

    public function __construct(PizzaIngredientFactory $factory)
    {
        $this->factory = $factory;
        $this->name = "Chicago Style Pepperoni Pizza";
    }

    public function prepare()
    {
        echo sprintf("Preparing %s \n", $this->name);
        $this->dough = $this->factory->createDough();
        $this->sauce = $this->factory->createSauce();
        $this->cheese = $this->factory->createCheese();
    }
}