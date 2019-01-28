<?php
class GarageDoor {
	/**
	 * @var string
	 */
	protected $location;

	public function __construct($location) {
		$this->location = $location;
	}

	public function up() {
		println($this->location . " garage Door is Up");
	}

	public function down() {
		println($this->location . " garage Door is Down");
	}

	public function stop() {
		println($this->location . " garage Door is Stopped");
	}

	public function lightOn() {
		println($this->location . " garage light is on");
	}

	public function lightOff() {
		println($this->location . " garage light is off");
	}
}
?>