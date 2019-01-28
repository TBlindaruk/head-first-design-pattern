<?php
class DimmerLightOnCommand implements Command {
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
	}

	public function execute() {
		$this->prevLevel = $this->light->getLevel();
		$this->light->dim(75);
	}

	public function undo() {
		$this->light->dim($this->prevLevel);
	}
}
?>