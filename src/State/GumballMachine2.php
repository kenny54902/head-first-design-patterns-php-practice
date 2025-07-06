<?php

namespace Kenny\DesignPattern\State;

class GumballMachine2
{

    private State $soldOutState;

    private State $noQuarterState;

    private State $hasQuarterState;

    private State $soldState;

    private State $currentState;

    private State $winnerState;

    private int $count = 0;

    public function __construct(int $count, ?LotteryStrate $lotteryStrate = null)
    {

        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this, $lotteryStrate);
        $this->soldOutState = new SoldOutState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);
        $this->count = $count;
        if ($this->count > 0) {
            $this->currentState = $this->noQuarterState;
        } else {
            $this->currentState = $this->soldOutState;
        }
    }

    public function setState(State $state): void
    {
        $this->currentState = $state;
    }

    public function getState(): State
    {
        return $this->currentState;
    }

    public function getHasQuarterState(): State
    {
        return $this->hasQuarterState;
    }
    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }
    public function getNoQuarterState(): State
    {
        return $this->noQuarterState;
    }
    public function getSoldState(): State
    {
        return $this->soldState;
    }

    public function getWinnerState(): State
    {
        return $this->winnerState;
    }

    public function releaseBall()
    {
        echo "a gumball comes rolling out the slot";
        if ($this->count > 0) {
            $this->count--;
        }
    }

    public function insertQuarter()
    {
        $this->currentState->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->currentState->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->currentState->turnCrank();
        $this->currentState->dispense();
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
