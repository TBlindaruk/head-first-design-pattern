<?php
class Stereo {
	/**
	 * @var string
	 */
	protected $location;

	public function __construct($location) {
		$this->location = $location;
	}

	public function on() {
		println($this->location . " stereo is on");
	}

	public function off() {
		println($this->location . " stereo is off");
	}

	public function setCD() {
		println($this->location . " stereo is set for CD input");
	}

	public function setDVD() {
		println($this->location . " stereo is set for DVD input");
	}

	public function setRadio() {
		println($this->location . " stereo is set for Radio");
	}

	public function setVolume($volume) {
		// code to set the volume
		// valid range: 1-11 (after all 11 is better than 10, right?)
		println($this->location . " Stereo volume set to " . $volume);
	}
}
?>
