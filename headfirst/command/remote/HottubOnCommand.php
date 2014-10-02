<?php
class HottubOnCommand implements Command {
	/**
	 * @var Hottub
	 */
	protected $hottub;

	public function __construct(Hottub $hottub) {
		$this->hottub = hottub;
	}

	public function execute() {
		$this->hottub->on();
		$this->hottub->heat();
		$this->hottub->bubblesOn();
	}
}
?>