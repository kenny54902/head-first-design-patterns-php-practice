<?php

namespace Kenny\DesignPattern\Weather;

interface Observer
{
    public function update(float $temp, float $humidity, float $pressure);
}
