<?php
class GumballMachineTestDrive {
	public static function main(array $args = array()) {
		$gumballMachine = new GumballMachine(10);

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
	}
}
?>