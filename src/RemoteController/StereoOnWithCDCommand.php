<?php

namespace Kenny\DesignPattern\RemoteController;

use Kenny\DesignPattern\RemoteController\Command;

class StereoOnWithCDCommand implements Command
{
    private Stereo $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }

    public function undo() {}
}
