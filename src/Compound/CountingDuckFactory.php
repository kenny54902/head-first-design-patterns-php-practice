<?php

namespace Kenny\DesignPattern\Compound;

class CountingDuckFactory extends AbstractDuckFactory
{
    public  function createMallardDuck(): QuackAble
    {
        return new QuackCounter(new MallardDuck());
    }
    public  function createRedheadDuck(): QuackAble
    {
        return new QuackCounter(new RedheadDuck());
    }
    public  function createDuckCall(): QuackAble
    {
        return new QuackCounter(new DuckCall());
    }
    public  function createRubberDuck(): QuackAble
    {
        return new QuackCounter(new RubberDuck());
    }
}
