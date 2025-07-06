<?php

namespace Kenny\DesignPattern\Compound;

interface Observer
{
    public function update(QuackObservable $duck);
}
