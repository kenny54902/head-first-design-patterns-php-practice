<?php

namespace Kenny\DesignPattern\RemoteController;

class LightOffCommand implements Command
{
    private Light $light;
    public function __construct(Light $light)
    {
        $this->light = $light;
    }
    public function execute()
    {
        $this->light->lightOff();
    }

    public function undo()
    {
        $this->light->lightOn();
    }
}
