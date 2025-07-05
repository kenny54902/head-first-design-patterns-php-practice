<?php

namespace Kenny\DesignPattern\State;

class GumballMachine
{
    public const  SOLD_OUT = 0;

    public const  NO_QUARTER = 1;

    public const  HAS_QUARTER = 2;

    public const  SOLD = 3;

    private int $state = self::SOLD_OUT;

    private int $count = 0;

    public function __construct(int $count)
    {
        $this->count = $count;
        if ($this->count > 0) {
            $this->state = self::NO_QUARTER;
        }
    }

    public function insertQuarter()
    {
        if ($this->state === self::HAS_QUARTER) {
            echo "You can't insert another quarter\n";
        } else if ($this->state  == self::NO_QUARTER) {
            $this->state = self::HAS_QUARTER;
            echo "You inserted a quarter\n";
        } else if ($this->state == self::SOLD_OUT) {
            echo "You can't insert a quarter, the machine is sold out\n";
        } else if ($this->state == self::SOLD) {
            echo "Please wait, we're already giving you a gumball\n";
        }
    }

    public function ejectQuarter(): void
    {
        if ($this->state === self::HAS_QUARTER) {
            echo "Quarter returned\n";
            $this->state = self::NO_QUARTER;
        } else if ($this->state  == self::NO_QUARTER) {
            echo "You haven't inserted a quarter\n";
        } else if ($this->state == self::SOLD_OUT) {
            echo "You can't eject, you haven't inserted a quarter yet\n";
        } else if ($this->state == self::SOLD) {
            echo "Sorry, you already turned the crank\n";
        }
    }

    public function turnCrank()
    {
        if ($this->state === self::HAS_QUARTER) {
            echo "You turned\n";
            $this->state = self::SOLD;
            $this->dispense();
        } else if ($this->state  == self::NO_QUARTER) {
            echo "You turned but there's no quarter\n";
        } else if ($this->state == self::SOLD_OUT) {
            echo "You turned but there's no gumballs\n";
        } else if ($this->state == self::SOLD) {
            echo "Turing twice doesn't get you another gumball\n";
        }
    }
    public function dispense(): void
    {
        if ($this->state === self::SOLD) {
            echo "A gumball comes rolling out the slot\n";
            $this->count--;
            if ($this->count <= 0) {
                echo "Oops, out of gumballs\n";
                $this->state = self::SOLD_OUT;
            } else {
                $this->state = self::NO_QUARTER;
            }
        } else {
            echo "state error\n";
        }
    }

    public function getState(): int
    {
        return $this->state;
    }
}
