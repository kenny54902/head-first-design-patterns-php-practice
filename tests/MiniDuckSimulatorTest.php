<?php

namespace Test;

use Kenny\DesignPattern\Duck\MiniDuckSimulator;
use PHPUnit\Framework\TestCase;

class MiniDuckSimulatorTest extends TestCase
{
    public function testMiniDuckSimulator()
    {
        ob_start();
        $duck = new MiniDuckSimulator();
        $output = ob_get_clean();
        $expected = "QuackI'm flying\nI can't flyI'm flying with a rocket!";
        $this->assertEquals($expected, $output);
    }
}