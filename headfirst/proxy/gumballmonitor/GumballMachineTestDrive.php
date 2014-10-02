<?php
class GumballMachineTestDrive {
	public static function main(array $args = array()) {
		$count = 0;

		if (count($args) < 2) {
			println("GumballMachine <name> <inventory>");
			exit();
		}

		$count = $args[1];

		$gumballMachine = new GumballMachine($args[0], $count);

		$monitor = new GumballMonitor($gumballMachine);

		println($gumballMachine);

		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();
		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();

		println($gumballMachine);

		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();
		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();

		println($gumballMachine);

		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();
		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();

		println($gumballMachine);

		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();
		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();

		println($gumballMachine);

		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();
		$gumballMachine->insertQuarter();
		$gumballMachine->turnCrank();

		println($gumballMachine);
		
		$monitor->report();
	}
}
?>