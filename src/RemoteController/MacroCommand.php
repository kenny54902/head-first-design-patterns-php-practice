<?php

namespace Kenny\DesignPattern\RemoteController;

class MacroCommand implements Command
{
    private $commands = [];

    public function __construct(...$commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo()
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}
