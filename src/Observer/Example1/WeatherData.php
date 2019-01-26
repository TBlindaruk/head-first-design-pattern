<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Observer\Example1;

use SplObjectStorage;

/**
 * Class WeatherData
 *
 * @package Maksi\HeadFirstDesignPattern\Observer\Example1
 */
class WeatherData implements Subject
{
    /**
     * @var SplObjectStorage|Observer[]
     */
    private $observers;

    /**
     * @var float
     */
    private $temparature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    /**
     * WeatherData constructor.
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @param Observer $observer
     */
    public function removeObserver(Observer $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * @return void
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temparature, $this->humidity, $this->pressure);
        }
    }

    /**
     * @return void
     */
    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    /**
     * @param float $temparature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements(float $temparature, float $humidity, float $pressure): void
    {
        $this->temparature = $temparature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}
