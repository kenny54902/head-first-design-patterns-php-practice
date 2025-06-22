<?php

namespace Kenny\DesignPattern\RemoteController;

class LightOnCommand implements Command
{
    private Light $light;
    public function __construct(Light $light)
    {
        $this->light = $light;
    }
    public function execute()
    {
        $this->light->lightOn();
    }

    public function undo()
    {
        $this->light->lightOff();
    }
}
