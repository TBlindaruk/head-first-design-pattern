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
		$winner = rand(0, 9);
		if (($winner == 0) && ($this->gumballMachine->getCount() > 1)) {
			$this->gumballMachine->setState($this->gumballMachine->getWinnerState());
		} else {
			$this->gumballMachine->setState($this->gumballMachine->getSoldState());
		}
	}

	public function dispense() {
		println("No gumball dispensed");
	}

	public function __toString() {
		return "waiting for turn of crank";
	}
}
?>