<?php
class StarbuzzCoffee {
	public static function main(array $args = array()) {
		$beverage = new Espresso();
		println($beverage->getDescription() . " $" . $beverage->cost());
		
		$beverage2 = new DarkRoast();
		$beverage2 = new Mocha($beverage2);
		$beverage2 = new Mocha($beverage2);
		$beverage2 = new Whip($beverage2);
		println($beverage2->getDescription() . " $" . $beverage2->cost());
		
		$beverage3 = new HouseBlend();
		$beverage3 = new Soy($beverage3);
		$beverage3 = new Mocha($beverage3);
		$beverage3 = new Whip($beverage3);
		println($beverage3->getDescription() . " $" . $beverage3->cost());
	}
}
?>