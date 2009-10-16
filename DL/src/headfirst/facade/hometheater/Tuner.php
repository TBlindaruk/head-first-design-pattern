<?php
class Tuner {
	protected $description;
	/**
	 * @var Amplifier
	 */
	protected $amplifier;
	protected $frequency;

	public function __construct($description, Amplifier $amplifier) {
		$this->description = $description;
	}

	public function on() {
		println($this->description . " on");
	}

	public function off() {
		println($this->description . " off");
	}

	public function setFrequency($frequency) {
		println($this->description . " setting frequency to " . $frequency);
		$this->frequency = $frequency;
	}

	public function setAm() {
		println($this->description . " setting AM mode");
	}

	public function setFm() {
		println($this->description . " setting FM mode");
	}

	public function __toString() {
		return $this->description;
	}
}
?>