<?php
class DuckTestDrive {
	public static function main(array $args = array()) {
		$duck = new MallardDuck();

		$turkey = new WildTurkey();
		$turkeyAdapter = new TurkeyAdapter($turkey);

		println("The Turkey says...");
		$turkey->gobble();
		$turkey->fly();

		println("\nThe Duck says...");
		self::testDuck($duck);

		println("\nThe TurkeyAdapter says...");
		self::testDuck($turkeyAdapter);
	}

	static function testDuck(Duck $duck) {
		$duck->quack();
		$duck->fly();
	}
}
?>