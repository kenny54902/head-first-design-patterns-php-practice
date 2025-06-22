<?php

namespace Kenny\DesignPattern\RemoteController;

class Light
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lightOn()
    {
        echo $this->name . " light is on\n";
    }

    public function lightOff()
    {
        echo $this->name . " light is off\n";
    }
}
