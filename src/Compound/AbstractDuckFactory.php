<?php

namespace Kenny\DesignPattern\Compound;

abstract class AbstractDuckFactory
{
    abstract public  function createMallardDuck(): QuackAble;
    abstract public  function createRedheadDuck(): QuackAble;
    abstract public  function createDuckCall(): QuackAble;
    abstract public  function createRubberDuck(): QuackAble;
}
