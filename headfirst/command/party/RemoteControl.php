<?php
//
// This is the invoker
//
class RemoteControl {
	/**
	 * @var array
	 */
	protected $onCommands;
	/**
	 * @var array
	 */
	protected $offCommands;
	/**
	 * @var Command
	 */
	protected $undoCommand;

	public function __construct() {
		$this->onCommands = array();
		$this->offCommands = array();

		$noCommand = new NoCommand();
		for($i=0; $i<7; $i++) {
			$this->onCommands[$i] = $noCommand;
			$this->offCommands[$i] = $noCommand;
		}
		$this->undoCommand = $noCommand;
	}

	public function setCommand($slot, Command $onCommand, Command $offCommand) {
		$this->onCommands[$slot] = $onCommand;
		$this->offCommands[$slot] = $offCommand;
	}

	public function onButtonWasPushed($slot) {
		$this->onCommands[$slot]->execute();
		$this->undoCommand = $this->onCommands[$slot];
	}

	public function offButtonWasPushed($slot) {
		$this->offCommands[$slot]->execute();
		$this->undoCommand = $this->offCommands[$slot];
	}

	public function undoButtonWasPushed() {
		$this->undoCommand->undo();
	}

	public function __toString() {
		$stringBuff = "";
		$stringBuff .= "\n------ Remote Control -------\n";
		for ($i = 0; $i < count($this->onCommands); $i++) {
			$stringBuff .= "[slot " . $i . "] " . get_class($this->onCommands[$i])
				. "    " . get_class($this->offCommands[$i]) . "\n";
		}
		$stringBuff .= "[undo] " . get_class($this->undoCommand) . "\n";
		return $stringBuff;
	}
}
?>