<?php

namespace Kenny\DesignPattern\State;

class HasQuarterState implements State
{

    private GumballMachine2 $gumballMachine2;

    public function __construct(GumballMachine2 $gumballMachine2)
    {
        $this->gumballMachine2 = $gumballMachine2;
    }
    public function insertQuarter()
    {
        echo "You already inserted a quarter\n";
        $this->gumballMachine2->setState($this->gumballMachine2->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo "return Quarter\n";
        $this->gumballMachine2->setState($this->gumballMachine2->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo "You turned...\n";
        if (random_int(0, 10) == 1) {
            $this->gumballMachine2->setState($this->gumballMachine2->getWinnerState());
        } else {
            $this->gumballMachine2->setState($this->gumballMachine2->getSoldState());
        }
    }

    public function dispense()
    {
        echo "status error\n";
    }
}