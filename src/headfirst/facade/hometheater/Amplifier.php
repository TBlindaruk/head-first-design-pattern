<?php
class Amplifier {
	protected $description;
	/**
	 * @var Tuner
	 */
	protected $tuner;
	/**
	 * @var DvdPlayer
	 */
	protected $dvd;
	/**
	 * @var CdPlayer
	 */
	protected $cd;
	
	public function __construct($description) {
		$this->description = $description;
	}

	public function on() {
		println($this->description . " on");
	}

	public function off() {
		println($this->description . " off");
	}

	public function setStereoSound() {
		println($this->description . " stereo mode on");
	}

	public function setSurroundSound() {
		println($this->description . " surround sound on (5 speakers, 1 subwoofer)");
	}

	public function setVolume($level) {
		println($this->description . " setting volume to " . $level);
	}

	public function setTuner(Tuner $tuner) {
		println($this->description . " setting tuner to " . $dvd);
		$this->tuner = tuner;
	}

	public function setDvd(DvdPlayer $dvd) {
		println($this->description . " setting DVD player to " . $dvd);
		$this->dvd = $dvd;
	}

	public function setCd(CdPlayer $cd) {
		println($this->description . " setting CD player to " . $cd);
		$this->cd = $cd;
	}

	public function __toString() {
		return $this->description;
	}
}
?>
