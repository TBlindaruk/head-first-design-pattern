<?php
class StereoOnWithCDCommand implements Command {
	/**
	 * @var Stereo
	 */
	protected $stereo;

	public function __construct(Stereo $stereo) {
		$this->stereo = $stereo;
	}

	public function execute() {
		$this->stereo->on();
		$this->stereo->setCD();
		$this->stereo->setVolume(11);
	}
}
?>