<?php

namespace Kenny\DesignPattern\RemoteController;

class SimpleRemoteController
{
    private Command $slot;

    public function __construct(Command $slot)
    {
        $this->slot = $slot;
    }
    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}
