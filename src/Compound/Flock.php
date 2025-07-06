<?php

namespace Kenny\DesignPattern\Compound;

use Kenny\DesignPattern\Compound\QuackAble;
use Kenny\DesignPattern\Compound\QuackList;





class Flock implements QuackAble
{
    private QuackList $quackers;

    public function __construct()
    {
        $this->quackers = new QuackList();
    }

    public function add(QuackAble $quack)
    {
        $this->quackers->add($quack);
    }

    public function quack()
    {
        foreach ($this->quackers as $quack) {
            $quack->quack();
        }
    }

    public function registerObserver(Observer $observer)
    {
        foreach ($this->quackers as $quack) {
            $quack->registerObserver($observer);
        }
    }

    public function notifyObserver()
    {
        foreach ($this->quackers as $quack) {
            $quack->notifyObserver();
        }
    }
}
