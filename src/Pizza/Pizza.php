<?php

namespace Kenny\DesignPattern\Pizza;



abstract class Pizza
{
    protected $name;

    protected Dough $dough;

    protected Sauce $sauce;

    protected array $veggies = [];

    protected Cheese $cheese;

    protected Pepperoni $pepperoni;

    protected Clam $clam;

    protected $toppings = [];

    abstract public  function prepare();

    public  function bake()
    {
        echo "Bake for 25mins at 350\n";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function getName()
    {
        return $this->name;
    }

    public function toString(): string
    {
        $veggies = [];
        foreach ($this->veggies as $veggie) {
            $veggies[] = $veggie->getName();
        }
        $ingredient = [
            $this->dough->getName(),
            $this->sauce->getName(),
            implode(",", $veggies),
            $this->cheese->getName(),
            $this->pepperoni->getName(),
            $this->clam->getName(),
        ];
        return implode(",", $ingredient);
    }
}