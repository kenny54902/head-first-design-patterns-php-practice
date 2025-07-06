<?php

namespace Kenny\DesignPattern\Compound;

class DuckFactory extends AbstractDuckFactory
{
    public  function createMallardDuck(): QuackAble
    {
        return new MallardDuck();
    }
    public  function createRedheadDuck(): QuackAble
    {
        return new RedheadDuck();
    }
    public  function createDuckCall(): QuackAble
    {
        return new DuckCall();
    }
    public  function createRubberDuck(): QuackAble
    {
        return new RubberDuck();
    }
}
