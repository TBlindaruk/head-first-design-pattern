<?php
class GumballMonitor {
	/**
	 * @var GumballMachine
	 */
	protected $machine;

	public function __construct(GumballMachine $machine) {
		$this->machine = $machine;
	}

	public function report() {
		println("Gumball Machine: " . $this->machine->getLocation());
		println("Current inventory: " . $this->machine->getCount() . " gumballs");
		println("Current state: " . $this->machine->getState());
	}
}
?>