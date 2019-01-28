<?php
class LightOnCommand implements Command {
	/**
	 * @var Light
	 */
	protected $light;

	public function __construct(Light $light) {
		$this->light = $light;
	}

	public function execute() {
		$this->light->on();
	}

	public function undo() {
		$this->light->off();
	}
}
?>