<?php
class SingletonTestDrive {
	public static function main(array $args = array()) {
		$foo = CoolerSingleton::getInstance();
		$bar = HotterSingleton::getInstance();
		println($foo);
		println($bar);
	}
}
?>