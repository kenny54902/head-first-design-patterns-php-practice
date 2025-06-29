<?php

namespace Kenny\DesignPattern\TemplateMethod;

class Tea extends CaffeineBeverage
{
    protected function brew() {}

    protected function addCondiments()
    {
        echo "tea addCondiments\n";
    }
}
