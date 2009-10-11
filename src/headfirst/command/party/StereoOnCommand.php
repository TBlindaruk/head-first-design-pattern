<?php
class StereoOnCommand implements Command {
	/**
	 * @var Stereo
	 */
	protected $stereo;

	public function __construct(Stereo $stereo) {
		$this->stereo = $stereo;
	}

	public function execute() {
		$this->stereo->on();
	}

	public function undo() {
		$this->stereo->off();
	}
}
?>