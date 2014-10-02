<?php
class BeverageTestDrive {
	public static function main(array $args = array()) {
		$tea = new Tea();
		$coffee = new Coffee();

		println("\nMaking tea...");
		$tea->prepareRecipe();

		println("\nMaking coffee...");
		$coffee->prepareRecipe();


		$teaHook = new TeaWithHook();
		$coffeeHook = new CoffeeWithHook();

		println("\nMaking tea...");
		$teaHook->prepareRecipe();

		println("\nMaking coffee...");
		$coffeeHook->prepareRecipe();
	}
}
?>