<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Facade\HomeTheater;

class DvdPlayer {
	protected $description;
	protected $currentTrack;
	/**
	 * @var Amplifier
	 */
	protected $amplifier;
	protected $movie;
	
	public function __construct($description, Amplifier $amplifier) {
		$this->description = $description;
		$this->amplifier = $amplifier;
	}

	public function on() {
		println($this->description . " on");
	}

	public function off() {
		println($this->description . " off");
	}

	public function eject() {
		$this->movie = NULL;
		println($this->description . " eject");
	}

	public function play($movieOrTrack) {
		if (is_string($movieOrTrack)) {
			$this->movie = $movieOrTrack;
			$this->currentTrack = 0;
			println($this->description . " playing \"" . $this->movie . "\"");
		} else {
			if ($this->movie == NULL) {
				println($this->description . " can't play track " . $movieOrTrack . " no dvd inserted");
			} else {
				$this->currentTrack = $movieOrTrack;
				println(description . " playing track " . $this->currentTrack . " of \"" . $this->movie . "\"");
			}
		}
	}

	public function stop() {
		$this->currentTrack = 0;
		println($this->description . " stopped \"" . $this->movie . "\"");
	}

	public function pause() {
		println($this->description . " paused \"" . $this->movie . "\"");
	}

	public function setTwoChannelAudio() {
		println($this->description . " set two channel audio");
	}

	public function setSurroundAudio() {
		println($this->description . " set surround audio");
	}

	public function __toString() {
		return $this->description;
	}
}
?>