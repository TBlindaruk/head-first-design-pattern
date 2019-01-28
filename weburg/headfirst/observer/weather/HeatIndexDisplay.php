<?php
class HeatIndexDisplay implements MyObserver, DisplayElement {
	private $heatIndex = 0.0;
	/**
	 * @var WeatherData
	 */
	private $weatherData;
	
	public function __construct(WeatherData $weatherData) {
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}
	
	public function update($t, $rh, $pressure) {
		$this->heatIndex = $this->computeHeatIndex($t, $rh);
		$this->display();
	}
	
	private function computeHeatIndex($t, $rh) {
		$index = (float)((16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh) 
			+ (0.00941695 * ($t * $t)) + (0.00728898 * ($rh * $rh)) 
			+ (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh * $rh)) +
			(0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t)) + (0.0000291583 * 
			($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh)) + 
			(0.000000197483 * ($t * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh)) +
			0.000000000843296 * ($t * $t * $rh * $rh * $rh)) -
			(0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
		return $index;
	}
	
	public function display() {
		println("Heat index is " . number_format($this->heatIndex, 5));
	}
}
?>