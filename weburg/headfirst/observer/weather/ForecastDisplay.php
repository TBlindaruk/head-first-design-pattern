<?php
class ForecastDisplay implements MyObserver, DisplayElement {
	private $currentPressure = 29.92;
	private $lastPressure;
	/**
	 * @var WeatherData
	 */
	private $weatherData;
	
	public function __construct(WeatherData $weatherData) {
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}
	
	public function update($temp, $humidity, $pressure) {
		$this->lastPressure = $this->currentPressure;
		$this->currentPressure = $pressure;
		
		$this->display();
	}
	
	public function display() {
		echo "Forecast: ";
		if ($this->currentPressure > $this->lastPressure) {
			println("Improving weather on the way!");
		} else if ($this->currentPressure == $this->lastPressure) {
			println("More of the same");
		} else if ($this->currentPressure < $this->lastPressure) {
			println("Watch out for cooler, rainy weather");
		}
	}
}
?>