<?php
class PizzaTestDrive {
	public static function main(array $args = array()) {
		$factory = new SimplePizzaFactory();
		$store = new PizzaStore($factory);
		
		$pizza = $store->orderPizza("cheese");
		println("We ordered a " . $pizza->getName() . "\n");
		
		$pizza = $store->orderPizza("veggie");
		println("We ordered a " . $pizza->getName() . "\n");
	}
}
?>