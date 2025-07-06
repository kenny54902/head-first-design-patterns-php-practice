<?php

namespace Kenny\DesignPattern\Compound;



interface QuackObservable
{
    public function registerObserver(Observer $observer);

    public function notifyObserver();
}
