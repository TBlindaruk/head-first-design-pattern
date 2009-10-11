<?php
require_once "java/ArrayList.php";

class WeatherData implements MySubject {
	/**
	 * @var ArrayList
	 */
	private $observers;
	private $temperature;
	private $humidity;
	private $pressure;
	
	public function __construct() {
		$this->observers = new ArrayList();
	}
	
	public function registerObserver(MyObserver $o) {
		$this->observers->add($o);
	}
	
	public function removeObserver(MyObserver $o) {
		$i = $this->observers->indexOf($o);
		if ($i >= 0) {
			$this->observers->remove($i);
		}
	}
	
	public function notifyObservers() {
		for ($i = 0; $i < $this->observers->size(); $i++) {
			$observer = $this->observers->get($i);
			$observer->update($this->temperature, $this->humidity, $this->pressure);
		}
	}
	
	public function measurementsChanged() {
		$this->notifyObservers();
	}
	
	public function setMeasurements($temperature, $humidity, $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->measurementsChanged();
	}
	
	// other WeatherData methods here
	
	public function getTemperature() {
		return $this->temperature;
	}
	
	public function getHumidity() {
		return $this->humidity;
	}
	
	public function getPressure() {
		return $this->pressure;
	}
}
?>