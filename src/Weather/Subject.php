<?php

namespace Kenny\DesignPattern\Weather;

interface Subject
{
    public function registerObserver(Observer $observers);

    public function removeObserver(Observer $observer);

    public function notifyObserver();
}
