<?php

namespace Kenny\DesignPattern\RemoteController;

use Kenny\DesignPattern\RemoteController\Command;
use Kenny\DesignPattern\RemoteController\NoCommand;

class RemoteController
{
    private array $onCommands = [];

    private array $offCommands = [];

    private Command $undoCommand;

    public function __construct()
    {
        $slotAmount = 10;
        for ($i = 0; $i < $slotAmount; $i++) {
            $this->onCommands[$i] = new NoCommand();
            $this->offCommands[$i] = new NoCommand();
        }
        $this->undoCommand = new NoCommand();
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPressed(int $slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPressed(int $slot)
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPressed()
    {
        $this->undoCommand->undo();
    }
}
