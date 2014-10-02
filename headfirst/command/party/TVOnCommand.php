<?php
class TVOnCommand implements Command {
	/**
	 * @var TV
	 */
	protected $tv;

	public function __construct(TV $tv) {
		$this->tv = $tv;
	}

	public function execute() {
		$this->tv->on();
		$this->tv->setInputChannel();
	}

	public function undo() {
		$this->tv->off();
	}
}
?>