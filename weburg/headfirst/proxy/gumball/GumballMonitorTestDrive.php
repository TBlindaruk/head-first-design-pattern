<?php
require_once "custom/Proxy.php";

class GumballMonitorTestDrive {
	public static function main(array $args = array()) {
		$location = array(
				"localhost:10000",
				"localhost:10000",
				"localhost:10000"
		);

		$monitor = array();

		for ($i = 0; $i < count($location); $i++) {
			$machine = Proxy::getProxy($location[$i]);
			$monitor[$i] = new GumballMonitor($machine);
			println($monitor[$i]);
		}

		for($i = 0; $i < count($monitor); $i++) {
			$monitor[$i]->report();
		}
	}
}
?>