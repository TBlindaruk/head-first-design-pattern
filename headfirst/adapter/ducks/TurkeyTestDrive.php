<?php
class TurkeyTestDrive {
	public static function main(array $args = array()) {
		$duck = new MallardDuck();
		$duckAdapter = new DuckAdapter($duck);

		for($i=0; $i<10; $i++) {
			println("The DuckAdapter says...");
			$duckAdapter->gobble();
			$duckAdapter->fly();
		}
	}
}
?>