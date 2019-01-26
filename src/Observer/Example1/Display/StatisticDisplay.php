<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Observer\Example1\Display;

use Maksi\HeadFirstDesignPattern\Observer\Example1\DisplayElement;
use Maksi\HeadFirstDesignPattern\Observer\Example1\Observer;
use Maksi\HeadFirstDesignPattern\Observer\Example1\WeatherData;

/**
 * Class StatisticDisplay
 *
 * @package Maksi\HeadFirstDesignPattern\Observer\Example1\Display
 */
class StatisticDisplay implements Observer, DisplayElement
{
    /**
     * @var float
     */
    private $maxTemp = 0.0;
    /**
     * @var int
     */
    private $minTemp = 200;
    /**
     * @var float
     */
    private $tempSum = 0.0;
    /**
     * @var int
     */
    private $numReadings;
    /**
     * @var WeatherData
     */
    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->tempSum += $temp;
        $this->numReadings++;

        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }

        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }

        $this->display();
    }

    public function display(): void
    {
        echo 'Avg/Max/Min temperature = ' . ($this->tempSum / $this->numReadings) . '/' . $this->maxTemp . '/' .
            $this->minTemp . PHP_EOL;
    }
}
