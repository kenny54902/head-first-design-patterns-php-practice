<?php

namespace Kenny\DesignPattern\Compound;

class DuckCall implements QuackAble
{

    private Observable $observable;

    public function quack()
    {
        echo "Kwak";
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
}
