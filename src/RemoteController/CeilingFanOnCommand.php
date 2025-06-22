<?php

namespace Kenny\DesignPattern\RemoteController;

use Kenny\DesignPattern\RemoteController\Command;

class CeilingFanOnCommand implements Command
{

    private CeilingFan $ceiling;
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceiling = $ceilingFan;
    }


    public function execute()
    {
        $this->ceiling->up();
    }

    public function undo()
    {
        $this->ceiling->down();
    }
}
