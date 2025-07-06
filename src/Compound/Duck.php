<?php

namespace Kenny\DesignPattern\Compound;

abstract class Duck implements QuackAble
{
    private Observable $observable;

    public function quack()
    {
        $this->doQuack();
        $this->notifyObserver();
    }

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function registerObserver(Observer $observer)
    {
        $this->observable->registerObserver($observer);
    }

    public function notifyObserver()
    {
        $this->observable->notifyObserver();
    }

    public abstract function doQuack();
}
