<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Facade\HomeTheater;

class CdPlayer {
	protected $description;
	protected $currentTrack;
	/**
	 * @var Amplifier
	 */
	protected $amplifier;
	protected $title;
	
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
		$this->title = NULL;
		println($this->description . " eject");
	}

	public function play($titleOrTrack) {
		if (is_string($titleOrTrack)) {
			$this->title = $titleOrTrack;
			$this->currentTrack = 0;
			println($this->description . " playing \"" . $this->title . "\"");
		} else {
			if ($this->title == NULL) {
				println($this->description . " can't play track " . $this->currentTrack . 
						", no cd inserted");
			} else {
				$this->currentTrack = $titleOrTrack;
				println($this->description . " playing track " . $this->currentTrack);
			}
		}
	}

	public function stop() {
		$this->currentTrack = 0;
		println($this->description . " stopped");
	}

	public function pause() {
		println($this->description . " paused \"" . $this->title . "\"");
	}

	public function __toString() {
		return $this->description;
	}
}
?>