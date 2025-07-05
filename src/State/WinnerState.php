<?php

namespace Kenny\DesignPattern\State;

class WinnerState implements State
{

    private GumballMachine2 $gumballMachine2;

    public function __construct(GumballMachine2 $gumballMachine2)
    {
        $this->gumballMachine2 = $gumballMachine2;
    }

    public function insertQuarter()
    {
        echo "Please wait, we're already giving you a gumball\n";
    }

    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank\n";
    }

    public function turnCrank()
    {
        echo "Turning twice doesn't get you another gumball\n";
    }

    public function dispense()
    {
        $this->gumballMachine2->releaseBall();
        if ($this->gumballMachine2->getCount() <= 0) {
            $this->gumballMachine2->setState($this->gumballMachine2->getSoldOutState());
        } else {
            $this->gumballMachine2->releaseBall();
            echo "You're a winner! you got two gumballs for your quarter\n";
        }

        if ($this->gumballMachine2->getCount() == 0) {
            $this->gumballMachine2->setState($this->gumballMachine2->getSoldOutState());
        } else {
            $this->gumballMachine2->setState($this->gumballMachine2->getNoQuarterState());
        }
    }
}