<?php

namespace Kenny\DesignPattern\Compound;

class QuackCounter implements QuackAble
{
    private Observable $observable;

    private QuackAble $duck;

    private static int $quackCount = 0;

    public function __construct(QuackAble $duck)
    {
        $this->duck = $duck;
        $this->observable = new Observable($this);
    }

    public function quack()
    {
        $this->duck->quack();
        self::$quackCount++;
    }

    public static function getQuackCount(): int
    {
        return self::$quackCount;
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
