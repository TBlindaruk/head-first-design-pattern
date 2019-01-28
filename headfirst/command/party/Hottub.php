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

	public function circulate() {
		if ($this->on) {
			println("Hottub is bubbling!");
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
		if ($temperature > $this->temperature) {
			println("Hottub is heating to a steaming " . $temperature . " degrees");
		}
		else {
			println("Hottub is cooling to " . $temperature . " degrees");
		}
		$this->temperature = $temperature;
	}
}
?>
