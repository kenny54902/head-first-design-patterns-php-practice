<?php

namespace Kenny\DesignPattern\RemoteController;

use Kenny\DesignPattern\RemoteController\Command;

class CeilingFansSpeedUpCommand implements Command
{

    private CeilingFan $ceiling;
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceiling = $ceilingFan;
    }


    public function execute()
    {
        $this->ceiling->setSpeed($this->ceiling->getSpeed() + 1);
    }

    public function undo()
    {
        $this->ceiling->setSpeed($this->ceiling->getPreSpeed());
    }
}
