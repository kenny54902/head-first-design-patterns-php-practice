<?php

namespace Kenny\DesignPattern\Weather;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private float $temp;

    private float $humidity;

    private float $pressure;

    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure)
    {
        $this->temp = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
    }

    public function display()
    {
        echo sprintf(
            "Current conditions\n temperature:%d, humidity:%d\n",
            $this->temp,
            $this->humidity
        );
    }
}
