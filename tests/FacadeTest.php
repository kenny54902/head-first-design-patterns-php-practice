<?php

namespace Test;


use Kenny\DesignPattern\Facade\Amplifier;
use Kenny\DesignPattern\Facade\HomeTheaterFacade;
use Kenny\DesignPattern\Facade\PopcornPopper;
use Kenny\DesignPattern\Facade\Projector;
use Kenny\DesignPattern\Facade\Screen;
use Kenny\DesignPattern\Facade\StreamingPlayer;
use Kenny\DesignPattern\Facade\TheaterLight;
use Kenny\DesignPattern\Facade\Tuner;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $facade = new HomeTheaterFacade(
            new Amplifier(),
            new Tuner(),
            new StreamingPlayer(),
            new Projector(),
            new TheaterLight(),
            new Screen(),
            new PopcornPopper
        );
        ob_start();
        $facade->watchMovie("movie");
        $output = ob_get_clean();
        $this->assertEquals(implode("\n", [
            "PopcornPopper on",
            "PopcornPopper pop",
            "light on\n",
        ]), $output);
    }
}
