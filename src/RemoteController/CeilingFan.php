<?php

namespace Kenny\DesignPattern\RemoteController;

class CeilingFan
{
    private string $name;

    private bool $isStarted = false;

    private int $speed = 1;

    private int $preSpeed = 1;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function up()
    {
        $this->isStarted = true;
        $this->setSpeed(1);
        echo sprintf("%s fan up", $this->name);
    }

    public function down()
    {
        $this->isStarted = false;
        $this->setSpeed(0);
        echo sprintf("%s fan down", $this->name);
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getPreSpeed(): int
    {
        return $this->preSpeed;
    }

    public function setSpeed(int $speed)
    {
        $this->preSpeed = $this->getSpeed();

        if ($speed > 12) {
            $speed = 1;
        }

        if ($speed < 1) {
            $speed = 12;
        }
        $speed = $this->isStarted ? $speed : 0;

        $this->speed = $speed;
    }
}
