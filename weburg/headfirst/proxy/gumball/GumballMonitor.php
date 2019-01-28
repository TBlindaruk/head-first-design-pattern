<?php
class GumballMonitor {
	/**
	 * @var GumballMachineRemote
	 */
	protected $machine;

	// Constructor arg should be GumballMachineRemote
	public function __construct($machine) {
		$this->machine = $machine;
	}

	public function report() {
		println("Gumball Machine: " . $this->machine->getLocation());
		println("Current inventory: " . $this->machine->getCount() . " gumballs");
		println("Current state: " . $this->machine->getState());
	}
	
	// Mimic roughly what Java would output
	public function __toString() {
		return get_class($this);
	}
}
?>