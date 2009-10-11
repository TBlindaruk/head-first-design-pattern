<?php
class CeilingFan {
	/**
	 * @var string
	 */
	protected $location = "";
	/**
	 * @var integer
	 */
	protected $level;
	const HIGH = 2;
	const MEDIUM = 1;
	const LOW = 0;

	public function __construct($location) {
		$this->location = $location;
	}

	public function high() {
		// turns the ceiling fan on to high
		$this->level = self::HIGH;
		println($this->location . " ceiling fan is on high");
	}

	public function medium() {
		// turns the ceiling fan on to medium
		$this->level = self::MEDIUM;
		println($this->location . " ceiling fan is on medium");
	}

	public function low() {
		// turns the ceiling fan on to low
		$this->level = self::LOW;
		println($this->location . " ceiling fan is on low");
	}

	public function off() {
		// turns the ceiling fan off
		$this->level = 0;
		println($this->location . " ceiling fan is off");
	}

	public function getSpeed() {
		return $this->level;
	}
}
?>