<?php

namespace Kenny\DesignPattern\TemplateMethod;

abstract class CaffeineBeverage
{

    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->isCustomerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    protected function boilWater()
    {
        echo "Boiling water\n";
    }

    protected abstract function brew();

    protected function pourInCup()
    {
        echo "Pour into cup\n";
    }

    // hook
    protected function isCustomerWantsCondiments(): bool
    {
        return true;
    }

    protected abstract function addCondiments();
}
