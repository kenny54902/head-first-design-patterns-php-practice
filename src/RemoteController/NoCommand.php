<?php

namespace Kenny\DesignPattern\RemoteController;

class NoCommand implements Command
{
    public function execute()
    {
        echo "no command\n";
    }

    public function undo()
    {
        echo "no command\n";
    }
}
