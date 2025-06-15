<?php

namespace Test;

use Kenny\DesignPattern\Duck\QuackDuckBuzzer;
use Kenny\DesignPattern\Starbuzz\Starbuzz;
use PHPUnit\Framework\TestCase;

class StarbuzzTest extends TestCase
{
    public function testStarbuzz()
    {
        ob_start();
        $buzzer = new Starbuzz();
        $output = ob_get_clean();
        $expected = [
            "TALL:Espresso",
            "$1.99",
            "TALL:DarkRoast, Mocha, Mocha, Whip, Soy",
            "$1.64",
            "VENTI:DarkRoast, Mocha, Mocha, Whip, Soy",
            "$1.79\n",
        ];
        $expected = implode("\n", $expected);
        $this->assertEquals($expected, $output);
    }
}
