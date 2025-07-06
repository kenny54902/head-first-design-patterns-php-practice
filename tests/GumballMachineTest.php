<?php

use Kenny\DesignPattern\State\AlwaysLoseLotteryStrate;
use Kenny\DesignPattern\State\AlwaysWinLotteryStrate;
use Kenny\DesignPattern\State\GumballMachine;
use Kenny\DesignPattern\State\GumballMachine2;
use Kenny\DesignPattern\State\NoQuarterState;
use Kenny\DesignPattern\State\SoldOutState;
use PHPUnit\Framework\TestCase;

class GumballMachineTest extends TestCase
{
    public function testGumballMachine()
    {
        ob_start();
        $gumballMachine = new GumballMachine(4);
        $this->assertEquals(GumballMachine::NO_QUARTER, $gumballMachine->getState());

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $this->assertEquals(GumballMachine::NO_QUARTER, $gumballMachine->getState());

        $gumballMachine->insertQuarter();
        $gumballMachine->ejectQuarter();
        $this->assertEquals(GumballMachine::NO_QUARTER, $gumballMachine->getState());

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->ejectQuarter();
        $this->assertEquals(GumballMachine::NO_QUARTER, $gumballMachine->getState());

        $gumballMachine->insertQuarter();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $this->assertEquals(GumballMachine::SOLD_OUT, $gumballMachine->getState());
        ob_end_clean();
    }

    public function testGumballMachine2()
    {
        ob_start();
        $gumballMachine = new GumballMachine2(4, new AlwaysLoseLotteryStrate());
        $this->assertInstanceOf(NoQuarterState::class, $gumballMachine->getState());

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $this->assertInstanceOf(NoQuarterState::class, $gumballMachine->getState());

        $gumballMachine->insertQuarter();
        $gumballMachine->ejectQuarter();
        $this->assertInstanceOf(NoQuarterState::class, $gumballMachine->getState());

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->ejectQuarter();
        $this->assertInstanceOf(NoQuarterState::class, $gumballMachine->getState());

        $gumballMachine->insertQuarter();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $this->assertInstanceOf(SoldOutState::class, $gumballMachine->getState());
        ob_end_clean();
    }

    public function testWinner()
    {
        $gumballMachine = new GumballMachine2(100, new AlwaysWinLotteryStrate());
        ob_start();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $output = ob_get_clean();
        $this->assertStringContainsString('winner', strtolower($output));
    }
}
