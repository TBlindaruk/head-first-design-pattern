<?php
class NoQuarterState implements State {
	/**
	 * @var GumballMachine
	 */
	protected $gumballMachine;

	public function __construct(GumballMachine $gumballMachine) {
		$this->gumballMachine = $gumballMachine;
	}

	public function insertQuarter() {
		println("You inserted a quarter");
		$this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
	}

	public function ejectQuarter() {
		println("You haven't inserted a quarter");
	}

	public function turnCrank() {
		println("You turned, but there's no quarter");
	}

	public function dispense() {
		println("You need to pay first");
	}

	public function __toString() {
		return "waiting for quarter";
	}
}
?>