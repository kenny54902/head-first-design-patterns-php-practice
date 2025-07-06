<?php

namespace Kenny\DesignPattern\State;

class HasQuarterState implements State
{

    private GumballMachine2 $gumballMachine2;

    private LotteryStrate $lotteryStrate;

    public function __construct(GumballMachine2 $gumballMachine2, ?LotteryStrate $lotteryStrate = null)
    {
        $this->gumballMachine2 = $gumballMachine2;
        $this->lotteryStrate = $lotteryStrate ?: new DefaultLotteryStrate();
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
        if ($this->lotteryStrate->isWinner()) {
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
