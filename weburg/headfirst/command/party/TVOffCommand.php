<?php
class TVOffCommand implements Command {
	/**
	 * @var TV
	 */
	protected $tv;

	public function __construct(TV $tv) {
		$this->tv = $tv;
	}

	public function execute() {
		$this->tv->off();
	}

	public function undo() {
		$this->tv->on();
	}
}
?>