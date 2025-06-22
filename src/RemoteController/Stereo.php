<?php

namespace Kenny\DesignPattern\RemoteController;

class Stereo
{
    public function on()
    {
        echo "stereo on\n";
    }

    public function setCD()
    {
        echo "stereo cd set\n";
    }

    public function setVolume(int $volume)
    {
        echo "stereo volume set to" . $volume . "\n";
    }
}
