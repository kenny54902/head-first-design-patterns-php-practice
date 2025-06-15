<?php

namespace Kenny\DesignPattern\Pizza;

abstract class Ingredient
{
    public function getName(): string
    {
        return get_called_class();
    }
}