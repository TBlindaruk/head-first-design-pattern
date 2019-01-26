<?php
declare(strict_types = 1);

use Maksi\HeadFirstDesignPattern\Observer\Example1\Display\CurrentConditionsDisplay;
use Maksi\HeadFirstDesignPattern\Observer\Example1\Display\ForecastDisplay;
use Maksi\HeadFirstDesignPattern\Observer\Example1\Display\StatisticDisplay;
use Maksi\HeadFirstDesignPattern\Observer\Example1\WeatherData;

require_once '../../../vendor/autoload.php';

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionsDisplay($weatherData);
$statisticDisplay = new StatisticDisplay($weatherData);
$forecastDisplay = new ForecastDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
echo '----------------------' . PHP_EOL;
$weatherData->setMeasurements(82, 70, 29.2);
echo '----------------------' . PHP_EOL;
$weatherData->setMeasurements(78, 90, 29.2);
echo '----------------------' . PHP_EOL;

