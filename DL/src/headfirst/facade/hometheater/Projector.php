<?php
class Projector {
	protected $description;
	/**
	 * @var DvdPlayer
	 */
	protected $dvdPlayer;

	public function __construct($description, DvdPlayer $dvdPlayer) {
		$this->description = $description;
		$this->dvdPlayer = $dvdPlayer;
	}

	public function on() {
		println($this->description . " on");
	}

	public function off() {
		println($this->description . " off");
	}

	public function wideScreenMode() {
		println($this->description . " in widescreen mode (16x9 aspect ratio)");
	}

	public function tvMode() {
		println($this->description . " in tv mode (4x3 aspect ratio)");
	}

	public function __toString() {
		return $this->description;
	}
}
?>