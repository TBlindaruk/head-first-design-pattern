<?php
class TheaterLights {
	protected $description;
	
	public function __construct($description) {
		$this->description = $description;
	}

	public function on() {
		println($this->description . " on");
	}

	public function off() {
		println($this->description . " off");
	}

	public function dim($level) {
		println($this->description . " dimming to " . $level  . "%");
	}

	public function __toString() {
		return $this->description;
	}
}
?>