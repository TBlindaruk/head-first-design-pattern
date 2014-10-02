<?php
require_once "custom/Proxy.php";

class GumballMachineTestDrive {
	public static function main(array $args = array()) {
		$gumballMachine = NULL;
		$count = 0;

		if (count($args) < 2) {
			println("GumballMachine <name> <inventory>");
			exit();
		}

		$count = $args[1];

		$gumballMachine = new GumballMachine($args[0], $count);

		Proxy::runServer($args[0], $gumballMachine, "GumballMachineRemote");
	}
}
?>