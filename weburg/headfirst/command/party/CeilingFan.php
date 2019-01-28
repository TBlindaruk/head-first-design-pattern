<?php
class CeilingFan {
	const HIGH = 3;
	const MEDIUM = 2;
	const LOW = 1;
	const OFF = 0;
	/**
	 * @var string
	 */
	protected $location;
	/**
	 * @var integer
	 */
	protected $speed;

	public function __construct($location) {
		$this->location = $location;
	}

	public function high() {
		// turns the ceiling fan on to high
		$this->speed = HIGH;
		println($this->location . " ceiling fan is on high");
	} 

	public function medium() {
		// turns the ceiling fan on to medium
		$this->speed = MEDIUM;
		println($this->location . " ceiling fan is on medium");
	}

	public function low() {
		// turns the ceiling fan on to low
		$this->speed = LOW;
		println($this->location . " ceiling fan is on low");
	}

	public function off() {
		// turns the ceiling fan off
		$this->speed = OFF;
		println($this->location . " ceiling fan is off");
	}

	public function getSpeed() {
		return $this->speed;
	}
}
?>