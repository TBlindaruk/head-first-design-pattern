<?php
class Light {
	/**
	 * @var string
	 */
	protected $location;
	/**
	 * @var integer
	 */
	protected $level;

	public function __construct($location) {
		$this->location = $location;
	}

	public function on() {
		$this->level = 100;
		println("Light is on");
	}

	public function off() {
		$this->level = 0;
		println("Light is off");
	}

	public function dim($level) {
		$this->level = $level;
		if ($level == 0) {
			off();
		}
		else {
			println("Light is dimmed to " . $level . "%");
		}
	}

	public function getLevel() {
		return $this->level;
	}
}
?>