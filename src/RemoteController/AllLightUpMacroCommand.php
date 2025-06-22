<?php

namespace Kenny\DesignPattern\RemoteController;

class AllLightUpMacroCommand implements Command
{

    private array $lights = [];

    public function __construct(...$lights)
    {
        $this->lights = $lights;
    }
    public function execute()
    {
        foreach ($this->lights as $light) {
            /** @var Light $light  */
            $light->lightOn();
        }
    }

    public function undo()
    {
        foreach ($this->lights as $light) {
            /** @var Light $light  */
            $light->lightOff();
        }
    }
}
