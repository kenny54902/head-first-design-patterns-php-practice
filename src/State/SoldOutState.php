<?php

namespace Kenny\DesignPattern\State;

class SoldOutState implements State
{

    private GumballMachine2 $gumballMachine2;

    public function __construct(GumballMachine2 $gumballMachine2)
    {
        $this->gumballMachine2 = $gumballMachine2;
    }
    public function insertQuarter()
    {
        echo "sold out...\n";
    }

    public function ejectQuarter()
    {
        echo "sold out...\n";
    }

    public function turnCrank()
    {
        echo "sold out...\n";
    }

    public function dispense()
    {
        echo "sold out...\n";
    }
}