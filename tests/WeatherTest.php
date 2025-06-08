<?php

namespace Test;

use Kenny\DesignPattern\Weather\CurrentConditionsDisplay;
use Kenny\DesignPattern\Weather\WeatherData;
use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{
    public function testWeather()
    {
        $weatherData = new WeatherData();
        $display = new CurrentConditionsDisplay($weatherData);
        ob_start();
        $weatherData->setMeasurements(80, 65, 30.4);
        $output = ob_get_clean();
        $this->assertEquals("Current conditions\n temperature:80, humidity:65\n", $output);
        ob_start();
        $weatherData->setMeasurements(82, 70, 29.2);
        $output = ob_get_clean();
        $this->assertEquals("Current conditions\n temperature:82, humidity:70\n", $output);
    }
}
