<?php
class MacroCommand implements Command {
	/**
	 * @var array
	 */
	protected $commands;

	public function __construct(array $commands) {
		$this->commands = $commands;
	}

	public function execute() {
		for ($i = 0; $i < count($this->commands); $i++) {
			$this->commands[$i]->execute();
		}
	}

	public function undo() {
		for ($i = 0; $i < count($this->commands); $i++) {
			$this->commands[$i]->undo();
		}
	}
}
?>