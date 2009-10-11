<?php
class SoldState implements State {
	/**
	 * @var GumballMachine
	 */
	protected $gumballMachine;

	public function __construct(GumballMachine $gumballMachine) {
		$this->gumballMachine = $gumballMachine;
	}

	public function insertQuarter() {
		println("Please wait, we're already giving you a gumball");
	}

	public function ejectQuarter() {
		println("Sorry, you already turned the crank");
	}

	public function turnCrank() {
		println("Turning twice doesn't get you another gumball!");
	}

	public function dispense() {
		$this->gumballMachine->releaseBall();
		if ($this->gumballMachine->getCount() > 0) {
			$this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
		} else {
			println("Oops, out of gumballs!");
			$this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
		}
	}

	public function __toString() {
		return "dispensing a gumball";
	}
}
?>