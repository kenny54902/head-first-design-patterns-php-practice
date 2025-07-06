<?php

namespace Kenny\DesignPattern\Compound;

class GooseAdapter implements QuackAble
{
    private Observable $observable;
    private Goose $goose;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }


    public function quack()
    {
        $this->goose->honk();
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
