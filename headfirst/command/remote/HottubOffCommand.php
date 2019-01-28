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
		$this->hottub->cool();
		$this->hottub->off();
	}
}
?>