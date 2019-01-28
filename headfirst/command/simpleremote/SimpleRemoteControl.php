<?php
//
// This is the invoker
//
class SimpleRemoteControl {
	protected $slot;

	public function __construct() {}

	public function setCommand(Command $command) {
		$this->slot = $command;
	}

	public function buttonWasPressed() {
		$this->slot->execute();
	}
}
?>