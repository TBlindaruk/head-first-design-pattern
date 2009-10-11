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

	public function __construct() {
		$onCommands = array();
		$offCommands = array();

		$noCommand = new NoCommand();
		for ($i = 0; $i < 7; $i++) {
			$this->onCommands[$i] = $noCommand;
			$this->offCommands[$i] = $noCommand;
		}
	}

	public function setCommand($slot, Command $onCommand, Command $offCommand) {
		$this->onCommands[$slot] = $onCommand;
		$this->offCommands[$slot] = $offCommand;
	}

	public function onButtonWasPushed($slot) {
		$this->onCommands[$slot]->execute();
	}
 
	public function offButtonWasPushed($slot) {
		$this->offCommands[$slot]->execute();
	}

	public function __toString() {
		$stringBuff = "";
		$stringBuff .= "\n------ Remote Control -------\n";
		for ($i = 0; $i < count($this->onCommands); $i++) {
			$stringBuff .= "[slot " . $i . "] " . get_class($this->onCommands[$i])
				. "    " . get_class($this->offCommands[$i]) . "\n";
		}
		return $stringBuff;
	}
}
?>
