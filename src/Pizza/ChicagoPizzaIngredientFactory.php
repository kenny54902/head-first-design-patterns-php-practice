<?php

namespace Kenny\DesignPattern\Pizza;


use Kenny\DesignPattern\Pizza\Cheese;
use Kenny\DesignPattern\Pizza\Clam;
use Kenny\DesignPattern\Pizza\Dough;
use Kenny\DesignPattern\Pizza\FrozenClams;
use Kenny\DesignPattern\Pizza\Garlic;
use Kenny\DesignPattern\Pizza\MarinaraSauce;
use Kenny\DesignPattern\Pizza\Onion;
use Kenny\DesignPattern\Pizza\Pepperoni;
use Kenny\DesignPattern\Pizza\PizzaIngredientFactory;
use Kenny\DesignPattern\Pizza\ReggianoCheese;
use Kenny\DesignPattern\Pizza\Sauce;
use Kenny\DesignPattern\Pizza\SlicedPepperoni;
use Kenny\DesignPattern\Pizza\ThinCrustDough;





class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [new Garlic(), new Onion()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FrozenClams();
    }
}