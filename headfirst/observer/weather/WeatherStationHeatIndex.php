<?php
class WeatherStationHeatIndex {
	public static function main(array $args = array()) {
		$weatherData = new WeatherData();
		
		$currentDisplay = new CurrentConditionsDisplay($weatherData);
		$statisticsDisplay = new StatisticsDisplay($weatherData);
		$forecastDisplay = new ForecastDisplay($weatherData);
		$heatIndexDisplay = new HeatIndexDisplay($weatherData);
		
		$weatherData->setMeasurements(80, 65, 30.4);
		$weatherData->setMeasurements(82, 70, 29.2);
		$weatherData->setMeasurements(78, 90, 29.2);
	}
}
?>