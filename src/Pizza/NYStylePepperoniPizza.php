<?php

namespace Kenny\DesignPattern\Pizza;

class NYStylePepperoniPizza extends Pizza
{
    protected PizzaIngredientFactory $factory;
    public function __construct(PizzaIngredientFactory $factory)
    {
        $this->name = "NY Style Pepperoni Pizza";
        $this->factory = $factory;
    }

    public function prepare()
    {
        echo sprintf("Preparing %s \n", $this->name);
        $this->dough = $this->factory->createDough();
        $this->sauce = $this->factory->createSauce();
        $this->cheese = $this->factory->createCheese();
    }
}