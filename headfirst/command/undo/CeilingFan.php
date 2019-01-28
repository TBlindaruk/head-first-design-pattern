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
		$this->speed = self::OFF;
	}

	public function high() {
		$this->speed = self::HIGH;
		println($this->location . " ceiling fan is on high");
	}

	public function medium() {
		$this->speed = self::MEDIUM;
		println($this->location . " ceiling fan is on medium");
	}

	public function low() {
		$this->speed = self::LOW;
		println($this->location . " ceiling fan is on low");
	}

	public function off() {
		$this->speed = self::OFF;
		println($this->location . " ceiling fan is off");
	}

	public function getSpeed() {
		return $this->speed;
	}
}
?>