<?php

namespace Kenny\DesignPattern\TemplateMethod;

use PhpParser\Node\Expr\Cast\Bool_;

class Coffee extends CaffeineBeverage
{

    public function brew() {}

    protected function addCondiments()
    {
        echo "coffee addCondiments\n";
    }

    protected function isCustomerWantsCondiments(): bool
    {
        return false;
    }
}
