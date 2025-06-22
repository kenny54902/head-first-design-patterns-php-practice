<?php

namespace Test;

use Kenny\DesignPattern\RemoteController\Light;
use Kenny\DesignPattern\RemoteController\LightOnCommand;
use Kenny\DesignPattern\RemoteController\SimpleRemoteController;
use PHPUnit\Framework\TestCase;

class SimpleRemoteTest extends TestCase
{
    public function testSimpleRemote()
    {
        ob_start();
        $controller = new SimpleRemoteController(new LightOnCommand(new Light('light')));
        $controller->buttonWasPressed();
        $output = ob_get_clean();
        $this->assertEquals("light light is on\n", $output);
    }
}
