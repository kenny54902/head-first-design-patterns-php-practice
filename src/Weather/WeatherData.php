<?php

namespace Kenny\DesignPattern\Weather;

class WeatherData implements Subject
{
    private $observerList = [];

    private $temperature;

    private $humidity;

    private $pressure;

    public function __construct() {}

    public function registerObserver(Observer $observer)
    {
        array_push($this->observerList, $observer);
    }

    public function removeObserver(Observer $observer)
    {
        $this->observerList = array_filter($this->observerList, function ($v) use ($observer) {
            return $v !== $observer;
        });

        $this->observerList =  array_values($this->observerList);
    }

    public function notifyObserver()
    {
        array_map(function (Observer $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }, $this->observerList);
    }

    public function measurementsChanged()
    {
        $this->notifyObserver();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}
