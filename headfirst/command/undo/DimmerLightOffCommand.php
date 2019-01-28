<?php
class DimmerLightOffCommand implements Command {
	/**
	 * @var Light
	 */
	protected $light;
	/**
	 * @var integer
	 */
	protected $prevLevel;

	public function __construct(Light $light) {
		$this->light = $light;
		$this->prevLevel = 100;
	}

	public function execute() {
		$this->prevLevel = $this->light->getLevel();
		$this->light->off();
	}

	public function undo() {
		$this->light->dim(prevLevel);
	}
}
?>