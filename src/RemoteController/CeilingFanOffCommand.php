<?php

namespace Kenny\DesignPattern\RemoteController;

use Kenny\DesignPattern\RemoteController\Command;

class CeilingFanOffCommand implements Command
{

    private CeilingFan $ceiling;
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceiling = $ceilingFan;
    }


    public function execute()
    {
        $this->ceiling->down();
    }

    public function undo()
    {
        $this->ceiling->up();
    }
}
