<?php
class WinnerState implements State {
	/**
	 * @var GumballMachine
	 */
	protected $gumballMachine;

	public function __construct(GumballMachine $gumballMachine) {
		$this->gumballMachine = $gumballMachine;
	}

	public function insertQuarter() {
		println("Please wait, we're already giving you a Gumball");
	}

	public function ejectQuarter() {
		println("Please wait, we're already giving you a Gumball");
	}

	public function turnCrank() {
		println("Turning again doesn't get you another gumball!");
	}

	public function dispense() {
		println("YOU'RE A WINNER! You get two gumballs for your quarter");
		$this->gumballMachine->releaseBall();
		if ($this->gumballMachine->getCount() == 0) {
			$this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
		} else {
			$this->gumballMachine->releaseBall();
			if ($this->gumballMachine->getCount() > 0) {
				$this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
			} else {
				println("Oops, out of gumballs!");
				$this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
			}
		}
	}

	public function __toString() {
		return "despensing two gumballs for your quarter, because YOU'RE A WINNER!";
	}
}
?>