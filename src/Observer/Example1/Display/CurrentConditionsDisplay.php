<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Observer\Example1\Display;

use Maksi\HeadFirstDesignPattern\Observer\Example1\DisplayElement;
use Maksi\HeadFirstDesignPattern\Observer\Example1\Observer;
use Maksi\HeadFirstDesignPattern\Observer\Example1\WeatherData;

/**
 * Class CurrentConditionsDisplay
 *
 * @package Maksi\HeadFirstDesignPattern\Observer\Example1\Display
 */
class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /**
     * @var float
     */
    private $temparature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var WeatherData
     */
    private $weatherData;

    /**
     * CurrentConditionsDisplay constructor.
     *
     * @param WeatherData $weatherData
     */
    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    /**
     * @return void
     */
    public function display(): void
    {
        echo 'Current conditions: ' . $this->temparature . 'F degrees and ' . $this->humidity . '% humidity' . PHP_EOL;
    }

    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->temparature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }
}
