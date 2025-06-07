<?php

namespace Kenny\DesignPattern\Duck;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        return "<< Silence >>";
    }
}