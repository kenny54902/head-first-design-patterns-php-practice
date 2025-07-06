<?php

namespace Kenny\DesignPattern\Compound;

class RubberDuck implements QuackAble
{
    private Observable $observable;
    public function __construct()
    {
        $this->observable = new Observable($this);
    }
    public function quack()
    {
        echo "Squeak";
        $this->notifyObserver();
    }

    public function registerObserver(Observer $observer)
    {
        $this->observable->registerObserver($observer);
    }

    public function notifyObserver()
    {
        $this->observable->notifyObserver();
    }
}
