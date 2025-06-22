<?php

namespace Kenny\DesignPattern\Adapter;

use Kenny\DesignPattern\Adapter\Turkey;

use Kenny\DesignPattern\Duck\DuckInterface;

class TurkeyAdapter implements DuckInterface
{
    private Turkey $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function performFly()
    {
        $this->turkey->gobble();
    }

    public function performQuack()
    {
        $this->turkey->fly();
    }
}
