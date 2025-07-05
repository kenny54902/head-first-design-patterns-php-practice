<?php

namespace Kenny\DesignPattern\State;

interface State
{
    public function insertQuarter();

    public function ejectQuarter();

    public function turnCrank();

    public function dispense();
}