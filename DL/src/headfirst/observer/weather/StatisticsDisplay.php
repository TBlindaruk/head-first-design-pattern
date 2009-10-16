<?php
class StatisticsDisplay implements MyObserver, DisplayElement {
	private $maxTemp = 0.0;
	private $minTemp = 200;
	private $tempSum = 0.0;
	private $numReadings = 0;
	/**
	 * @var WeatherData
	 */
	private $weatherData;
	
	public function __construct(WeatherData $weatherData) {
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}
	
	public function update($temp, $humidity, $pressure) {
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
	
	public function display() {
		println("Avg/Max/Min temperature = " . number_format($this->tempSum / $this->numReadings, 1) .
				"/" . number_format($this->maxTemp, 1) . "/" . number_format($this->minTemp, 1));
	}
}
?>