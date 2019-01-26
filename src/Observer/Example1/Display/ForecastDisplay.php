<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Observer\Example1\Display;

use Maksi\HeadFirstDesignPattern\Observer\Example1\DisplayElement;
use Maksi\HeadFirstDesignPattern\Observer\Example1\Observer;
use Maksi\HeadFirstDesignPattern\Observer\Example1\WeatherData;

/**
 * Class ForecastDisplay
 *
 * @package Maksi\HeadFirstDesignPattern\Observer\Example1\Display
 */
class ForecastDisplay implements Observer, DisplayElement
{
    /**
     * @var float
     */
    private $currentPressure = 29.92;

    /**
     * @var float
     */
    private $lastPressure;

    /**
     * @var WeatherData
     */
    private $weatherData;

    /**
     * ForecastDisplay constructor.
     *
     * @param WeatherData $weatherData
     */
    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }

    /**
     * @return void
     */
    public function display(): void
    {
        echo 'Forecast: ' . PHP_EOL;
        if ($this->currentPressure > $this->lastPressure) {
            echo 'Improving weather on the way!' . PHP_EOL;
        } elseif ($this->currentPressure === $this->lastPressure) {
            echo 'Мore of the same' . PHP_EOL;
        } elseif ($this->currentPressure < $this->lastPressure) {
            echo 'Watch out for cooler, rainy weather' . PHP_EOL;
        }
    }
}
