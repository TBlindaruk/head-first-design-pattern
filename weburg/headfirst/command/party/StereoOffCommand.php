<?php
class StereoOffCommand implements Command {
	/**
	 * @var Stereo
	 */
	protected $stereo;

	public function __construct(Stereo $stereo) {
		$this->stereo = $stereo;
	}

	public function execute() {
		$this->stereo->off();
	}

	public function undo() {
		$this->stereo->on();
	}
}
?>