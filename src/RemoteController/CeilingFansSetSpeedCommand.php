<?php

namespace Kenny\DesignPattern\RemoteController;

use Kenny\DesignPattern\RemoteController\Command;

class CeilingFansSetSpeedCommand implements Command
{

    private CeilingFan $ceiling;

    private int $speed;

    public function __construct(CeilingFan $ceilingFan, $speed)
    {
        $this->ceiling = $ceilingFan;
        $this->speed = $speed;
    }


    public function execute()
    {
        $this->ceiling->setSpeed($this->speed);
    }

    public function undo()
    {
        $this->ceiling->setSpeed($this->ceiling->getPreSpeed());
    }
}
