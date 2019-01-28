<?php
class CeilingFanOffCommand implements Command {
	/**
	 * @var CeilingFan
	 */
	protected $ceilingFan;
	/**
	 * @var integer
	 */
	protected $prevSpeed;

	public function __construct(CeilingFan $ceilingFan) {
		$this->ceilingFan = $ceilingFan;
	}
	public function execute() {
		$this->prevSpeed = $this->ceilingFan->getSpeed();
		$this->ceilingFan->off();
	}
	public function undo() {
		switch ($this->prevSpeed) {
			case CeilingFan::HIGH: 	$this->ceilingFan->high(); break;
			case CeilingFan::MEDIUM: $this->ceilingFan->medium(); break;
			case CeilingFan::LOW: 	$this->ceilingFan->low(); break;
			default: 				$this->ceilingFan->off(); break;
		}
	}
}
?>