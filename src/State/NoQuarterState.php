<?php

namespace Kenny\DesignPattern\State;

class NoQuarterState implements State
{

    private GumballMachine2 $gumballMachine2;

    public function __construct(GumballMachine2 $gumballMachine2)
    {
        $this->gumballMachine2 = $gumballMachine2;
    }
    public function insertQuarter()
    {
        echo "You inserted a quarter\n";
        $this->gumballMachine2->setState($this->gumballMachine2->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo "You haven't inserted a quarter\n";
    }

    public function turnCrank()
    {
        echo "You haven't inserted a quarter\n";
    }

    public function dispense()
    {
        echo "You haven't inserted a quarter\n";
    }
}