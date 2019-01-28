<?php
class LightOffCommand implements Command {
	/**
	 * @var Light
	 */
	protected $light;

	public function __construct(Light $light) {
		$this->light = $light;
	}

	public function execute() {
		$this->light->off();
	}
}
?>