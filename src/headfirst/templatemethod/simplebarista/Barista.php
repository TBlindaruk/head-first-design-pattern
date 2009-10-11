<?php
class Barista {
	public static function main(array $args = array()) {
		$tea = new Tea();
		$coffee = new Coffee();
		println("Making tea...");
		$tea->prepareRecipe();
		println("Making coffee...");
		$coffee->prepareRecipe();
	}
}
?>