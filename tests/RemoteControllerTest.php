<?php

namespace Test;

use Kenny\DesignPattern\RemoteController\AllLightDownMacroCommand;
use Kenny\DesignPattern\RemoteController\AllLightUpMacroCommand;
use Kenny\DesignPattern\RemoteController\CeilingFan;
use Kenny\DesignPattern\RemoteController\CeilingFanOffCommand;
use Kenny\DesignPattern\RemoteController\CeilingFanOnCommand;
use Kenny\DesignPattern\RemoteController\CeilingFansSetSpeedCommand;
use Kenny\DesignPattern\RemoteController\CeilingFansSpeedUpCommand;
use Kenny\DesignPattern\RemoteController\Light;
use Kenny\DesignPattern\RemoteController\LightOffCommand;
use Kenny\DesignPattern\RemoteController\LightOnCommand;
use Kenny\DesignPattern\RemoteController\MacroCommand;
use Kenny\DesignPattern\RemoteController\NoCommand;
use Kenny\DesignPattern\RemoteController\RemoteController;
use Kenny\DesignPattern\RemoteController\Stereo;
use Kenny\DesignPattern\RemoteController\StereoOffCommand;
use Kenny\DesignPattern\RemoteController\StereoOnWithCDCommand;
use PHPUnit\Framework\TestCase;


class RemoteControllerTest extends TestCase
{
    public function testRemote()
    {
        $livingRoomLight  = new Light('livingRoom');
        $livingRoomLightOnCommand = new LightOnCommand($livingRoomLight);
        $livingRoomOffCommand = new LightOffCommand($livingRoomLight);

        $kitchenLight = new Light('kitchen');
        $kitchenLightOnCommand = new LightOnCommand($kitchenLight);
        $kitchenLightOffCommand = new LightOffCommand($kitchenLight);

        $stereo = new Stereo();
        $stereoOnCommand = new StereoOnWithCDCommand($stereo);
        $stereoOffCommand = new StereoOffCommand($stereo);

        $controller = new RemoteController();
        ob_start();
        $controller->setCommand(0, $livingRoomLightOnCommand, $livingRoomOffCommand);
        $controller->setCommand(1, $kitchenLightOnCommand, $kitchenLightOffCommand);
        $controller->setCommand(2, $stereoOnCommand, $stereoOffCommand);
        $controller->onButtonWasPressed(0);
        $controller->offButtonWasPressed(0);
        $controller->onButtonWasPressed(1);
        $controller->offButtonWasPressed(1);
        $controller->onButtonWasPressed(2);
        $controller->offButtonWasPressed(2);
        $controller->onButtonWasPressed(3);
        $controller->offButtonWasPressed(3);
        $controller->onButtonWasPressed(4);
        $controller->offButtonWasPressed(4);
        $output = ob_get_clean();
        $expected = [
            'livingRoom light is on',
            'livingRoom light is off',
            'kitchen light is on',
            'kitchen light is off',
            'stereo on',
            'stereo cd set',
            'stereo volume set to11',
            'Stereo off ',
            'no command',
            'no command',
            'no command',
            "no command\n",
        ];
        $this->assertEquals(implode("\n", $expected), $output);
    }

    public function testRemoteUndo()
    {
        $livingRoomLight  = new Light('livingRoom');
        $livingRoomLightOnCommand = new LightOnCommand($livingRoomLight);
        $livingRoomOffCommand = new LightOffCommand($livingRoomLight);

        ob_start();
        $controller = new RemoteController();
        $controller->setCommand(0, $livingRoomLightOnCommand, $livingRoomOffCommand);
        $controller->onButtonWasPressed(0);
        $controller->undoButtonWasPressed();
        $output = ob_get_clean();
        $expected = [
            'livingRoom light is on',
            "livingRoom light is off\n"
        ];
        $this->assertEquals(implode("\n", $expected), $output);
    }

    public function testCeilingFanSpeed()
    {
        ob_start();
        $ceilingFan = new CeilingFan("ceiling fan");
        $ceilingFanUpCommand = new CeilingFanOnCommand($ceilingFan);
        $ceilingFanDownCommand = new CeilingFanOffCommand($ceilingFan);
        $ceilingSetSpeedTo12Command = new CeilingFansSetSpeedCommand($ceilingFan, 12);
        $ceilingSpeedUpCommand = new CeilingFansSpeedUpCommand($ceilingFan);
        $controller = new RemoteController();
        $noCommand = new NoCommand();
        $controller->setCommand(0, $ceilingFanUpCommand, $ceilingFanDownCommand);
        $controller->setCommand(1, $ceilingSpeedUpCommand, $noCommand);
        $controller->setCommand(2, $ceilingSetSpeedTo12Command, $noCommand);

        $controller->onButtonWasPressed(slot: 0);
        $this->assertEquals(1, $ceilingFan->getSpeed());
        $controller->onButtonWasPressed(1);
        $this->assertEquals(2, $ceilingFan->getSpeed());
        $controller->onButtonWasPressed(2);
        $this->assertEquals(12, $ceilingFan->getSpeed());
        $controller->onButtonWasPressed(1);
        $this->assertEquals(1, $ceilingFan->getSpeed());
        $controller->undoButtonWasPressed();
        $this->assertEquals(12, $ceilingFan->getSpeed());
        ob_end_clean();
    }

    public function testMacroCommand()
    {
        $light1 = new Light('light 1');
        $light2 = new Light('light 2');
        $light3 = new Light('light 3');

        $allLightOnCommand = new AllLightUpMacroCommand($light1, $light2, $light3);
        $allLightOffCommand = new AllLightDownMacroCommand($light1, $light2, $light3);
        $controller = new RemoteController();
        $controller->setCommand(0, $allLightOnCommand, $allLightOffCommand);
        ob_start();
        $controller->onButtonWasPressed(0);
        $output = ob_get_clean();
        $this->assertEquals(implode("\n", [
            "light 1 light is on",
            "light 2 light is on",
            "light 3 light is on\n",
        ]), $output);

        ob_start();
        $controller->offButtonWasPressed(0);
        $output = ob_get_clean();
        $this->assertEquals(implode("\n", [
            "light 1 light is off",
            "light 2 light is off",
            "light 3 light is off\n",
        ]), $output);


        ob_start();
        $controller->undoButtonWasPressed();
        $output = ob_get_clean();
        $this->assertEquals(implode("\n", [
            "light 1 light is on",
            "light 2 light is on",
            "light 3 light is on\n",
        ]), $output);
    }

    public function testMacroCommand2()
    {
        $light1 = new Light('light 1');
        $light2 = new Light('light 2');
        $light3 = new Light('light 3');
        $macroOnCommand = new MacroCommand(
            new LightOnCommand($light1),
            new LightOnCommand($light2),
            new LightOnCommand($light3),
        );
        $macroOffCommand = new MacroCommand(
            new LightOffCommand($light1),
            new LightOffCommand($light2),
            new LightOffCommand($light3),
        );

        $controller = new RemoteController();
        $controller->setCommand(0, $macroOnCommand, $macroOffCommand);
        ob_start();
        $controller->onButtonWasPressed(0);
        $output = ob_get_clean();
        $this->assertEquals(implode("\n", [
            "light 1 light is on",
            "light 2 light is on",
            "light 3 light is on\n",
        ]), $output);

        ob_start();
        $controller->offButtonWasPressed(0);
        $output = ob_get_clean();
        $this->assertEquals(implode("\n", [
            "light 1 light is off",
            "light 2 light is off",
            "light 3 light is off\n",
        ]), $output);


        ob_start();
        $controller->undoButtonWasPressed();
        $output = ob_get_clean();
        $this->assertEquals(implode("\n", [
            "light 1 light is on",
            "light 2 light is on",
            "light 3 light is on\n",
        ]), $output);
    }
}
