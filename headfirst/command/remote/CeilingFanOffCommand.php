<?php
class CeilingFanOffCommand implements Command {
	/**
	 * @var CeilingFan
	 */
	protected $ceilingFan;

	public function __construct(CeilingFan $ceilingFan) {
		$this->ceilingFan = $ceilingFan;
	}
	public function execute() {
		$this->ceilingFan->off();
	}
}
?>