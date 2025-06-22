<?php

namespace Kenny\DesignPattern\RemoteController;


interface Command
{
    public function execute();

    public function undo();
}
