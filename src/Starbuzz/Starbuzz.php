<?php

namespace Kenny\DesignPattern\Starbuzz;

class Starbuzz
{
    public function __construct()
    {
        $beverage = new Espresso();
        echo $beverage->getDescription() . "\n";
        echo "$" . $beverage->cost() . "\n";

        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        $beverage2 = new Soy($beverage2);
        echo $beverage2->getDescription() . "\n";
        echo "$" . $beverage2->cost() . "\n";

        $beverage3 = new DarkRoast();
        $beverage3->setSize("VENTI");
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        $beverage3 = new Soy($beverage3);
        echo $beverage3->getDescription() . "\n";
        echo "$" . $beverage3->cost() . "\n";
    }
}
