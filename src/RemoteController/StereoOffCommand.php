<?php

namespace Kenny\DesignPattern\RemoteController;

class StereoOffCommand implements Command
{
    public function execute()
    {
        echo "Stereo off \n";
    }

    public function undo() {}
}
