<?php
class Hottub {
	/**
	 * @var boolean
	 */
	protected $on;
	/**
	 * @var integer
	 */
	protected $temperature;

	public function __construct() {
	}

	public function on() {
		$this->on = TRUE;
	}

	public function off() {
		$this->on = FALSE;
	}

	public function bubblesOn() {
		if ($this->on) {
			println("Hottub is bubbling!");
		}
	}

	public function bubblesOff() {
		if ($this->on) {
			println("Hottub is not bubbling");
		}
	}

	public function jetsOn() {
		if (!$this->on) {
			println("Hottub jets are on");
		}
	}

	public function jetsOff() {
		if ($this->on) {
			println("Hottub jets are off");
		}
	}

	public function setTemperature($temperature) {
		$this->temperature = $temperature;
	}

	public function heat() {
		$this->temperature = 105;
		println("Hottub is heating to a steaming 105 degrees");
	}

	public function cool() {
		$this->temperature = 98;
		println("Hottub is cooling to 98 degrees");
	}
}
?>
