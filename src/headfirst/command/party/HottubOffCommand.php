<?php
class HottubOffCommand implements Command {
	/**
	 * @var Hottub
	 */
	protected $hottub;

	public function __construct(Hottub $hottub) {
		$this->hottub = $hottub;
	}

	public function execute() {
		$this->hottub->setTemperature(98);
		$this->hottub->off();
	}
	public function undo() {
		$this->hottub->on();
	}
}
?>