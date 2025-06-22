<?php

namespace Test;

use Kenny\DesignPattern\Adapter\Turkey;
use Kenny\DesignPattern\Adapter\TurkeyAdapter;
use Kenny\DesignPattern\Duck\Duck;
use Kenny\DesignPattern\Duck\DuckInterface;
use Kenny\DesignPattern\Duck\MallardDuck;
use Kenny\DesignPattern\Duck\MiniDuckSimulator;
use PHPUnit\Framework\TestCase;

class TurkeyAdapterTest extends TestCase
{
    public function testMiniDuckSimulator()
    {
        ob_start();
        $turkey = new Turkey();
        $duck = new TurkeyAdapter($turkey);
        $this->assertTrue(self::testDuck($duck));
        ob_end_clean();
    }

    private static function testDuck(DuckInterface $duck)
    {
        $duck->performFly();
        $duck->performQuack();
        return true;
    }
}
