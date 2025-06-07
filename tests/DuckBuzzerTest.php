<?php

namespace Test;

use Kenny\DesignPattern\Duck\QuackDuckBuzzer;
use PHPUnit\Framework\TestCase;

class DuckBuzzerTest extends TestCase
{
    public function testDuckBuzzer()
    {
        $buzzer = new QuackDuckBuzzer();
        $this->assertEquals("Quack", $buzzer->performQuack());
    }
}