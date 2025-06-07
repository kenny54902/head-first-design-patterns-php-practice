<?php

namespace Test;

use Kenny\DesignPattern\Duck\QuackDuckBuzzer;
use Kenny\DesignPattern\RPG\King;
use Kenny\DesignPattern\RPG\Knight;
use Kenny\DesignPattern\RPG\Troll;
use PHPUnit\Framework\TestCase;

class RpgTest extends TestCase
{
    public function test()
    {
        $king = new King();
        $this->assertEquals('king', $king->display());
        $this->assertEquals('sword', $king->useWeapon());
        $troll = new Troll();
        $this->assertEquals('troll', $troll->display());
        $this->assertEquals('shoot', $troll->useWeapon());
    }
}