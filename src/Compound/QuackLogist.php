<?php

namespace Kenny\DesignPattern\Compound;


class QuackLogist implements Observer
{
    public function update(QuackObservable $duck)
    {
        echo sprintf("%s just Quacked.\n", get_class($duck));
    }
}
