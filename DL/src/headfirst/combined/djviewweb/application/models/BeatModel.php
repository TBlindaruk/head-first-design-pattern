<?php
require_once "models/BeatModelInterface.php";
require_once "custom/mvc/FileModel.php";

class BeatModel extends FileModel implements BeatModelInterface {
	protected $bpm = 90;

	public function on() {
		$this->setBPM(90);
	}

	public function off() {
		$this->setBPM(0);
	}

	public function setBPM($bpm) {
		$this->bpm = $bpm;
	}

	public function getBPM() {
		return $this->bpm;
	}
}
?>