<?php
class SoldOutState implements State {
	/**
	 * @var GumballMachine
	 */
	protected $gumballMachine;

	public function __construct(GumballMachine $gumballMachine) {
		$this->gumballMachine = $gumballMachine;
	}

	public function insertQuarter() {
		println("You can't insert a quarter, the machine is sold out");
	}

	public function ejectQuarter() {
		println("You can't eject, you haven't inserted a quarter yet");
	}

	public function turnCrank() {
		println("You turned, but there are no gumballs");
	}

	public function dispense() {
		println("No gumball dispensed");
	}

	public function __toString() {
		return "sold out";
	}
}
?>