<?php
class PizzaTestDrive {
	public static function main(array $args = array()) {
		$nyStore = new NYPizzaStore();
		$chicagoStore = new ChicagoPizzaStore();
		
		$pizza = $nyStore->orderPizza("cheese");
		println("Ethan ordered a " . $pizza->getName() . "\n");
		
		$pizza = $chicagoStore->orderPizza("cheese");
		println("Joel ordered a " . $pizza->getName() . "\n");
		
		$pizza = $nyStore->orderPizza("clam");
		println("Ethan ordered a " . $pizza->getName() . "\n");
		
		$pizza = $chicagoStore->orderPizza("clam");
		println("Joel ordered a " . $pizza->getName() . "\n");
		
		$pizza = $nyStore->orderPizza("pepperoni");
		println("Ethan ordered a " . $pizza->getName() . "\n");
		
		$pizza = $chicagoStore->orderPizza("pepperoni");
		println("Joel ordered a " . $pizza->getName() . "\n");
		
		$pizza = $nyStore->orderPizza("veggie");
		println("Ethan ordered a " . $pizza->getName() . "\n");
		
		$pizza = $chicagoStore->orderPizza("veggie");
		println("Joel ordered a " . $pizza->getName() . "\n");
	}
}
?>