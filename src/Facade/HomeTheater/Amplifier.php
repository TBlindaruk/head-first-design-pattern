<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Facade\HomeTheater;

/**
 * Class Amplifier
 *
 * @package Maksi\HeadFirstDesignPattern\Facade\HomeTheater
 */
class Amplifier {
    /**
     * @var string
     */
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

    /**
     * Amplifier constructor.
     *
     * @param string $description
     */
	public function __construct(string $description) {
		$this->description = $description;
	}

	public function on() {
		echo $this->description . " on" . PHP_EOL;
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
