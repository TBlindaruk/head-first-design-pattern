<?php
class HasQuarterState implements State {
	/**
	 * @var GumballMachine
	 */
	protected $gumballMachine;

	public function __construct(GumballMachine $gumballMachine) {
		$this->gumballMachine = $gumballMachine;
	}

	public function insertQuarter() {
		println("You can't insert another quarter");
	}

	public function ejectQuarter() {
		println("Quarter returned");
		$this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
	}

	public function turnCrank() {
		println("You turned...");
		$this->gumballMachine->setState($this->gumballMachine->getSoldState());
	}

	public function dispense() {
		println("No gumball dispensed");
	}

	public function __toString() {
		return "waiting for turn of crank";
	}
}
?>