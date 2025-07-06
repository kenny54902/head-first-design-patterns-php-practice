<?php

use Kenny\DesignPattern\Compound\CountingDuckFactory;
use Kenny\DesignPattern\Compound\DuckCall;
use Kenny\DesignPattern\Compound\DuckFactory;
use Kenny\DesignPattern\Compound\DuckSimulator;
use Kenny\DesignPattern\Compound\MallardDuck;
use Kenny\DesignPattern\Compound\QuackAble;
use Kenny\DesignPattern\Compound\RedheadDuck;
use Kenny\DesignPattern\Compound\RubberDuck;
use PHPUnit\Framework\TestCase;

class CompoundTest extends TestCase
{
    public function testDuckSimulator()
    {
        ob_start();
        $simulator = new DuckSimulator(new CountingDuckFactory());
        $this->assertTrue($simulator->execute());

        $simulator = new DuckSimulator(new DuckFactory());
        $this->assertTrue($simulator->execute());
        ob_end_clean();
    }
}
