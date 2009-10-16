<?php
class Light {
	/**
	 * @var string
	 */
	protected $location = "";

	public function __construct($location) {
		$this->location = $location;
	}

	public function on() {
		println($this->location . " light is on");
	}

	public function off() {
		println($this->location . " light is off");
	}
}
?>