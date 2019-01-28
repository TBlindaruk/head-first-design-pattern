<?php
class CurrentConditionsDisplay implements MyObserver, DisplayElement {
	private $temperature;
	private $humidity;
	/**
	 * @var MySubject
	 */
	private $weatherData;
	
	public function __construct(MySubject $weatherData) {
		$this->weatherData = $weatherData;
		$this->weatherData->registerObserver($this);
	}
	
	public function update($temperature, $humidity, $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->display();
	}
	
	public function display() {
		println("Current conditions: " . number_format($this->temperature, 1) .
				"F degrees and " . number_format($this->humidity, 1) . "% humidity");
	}
}
?>