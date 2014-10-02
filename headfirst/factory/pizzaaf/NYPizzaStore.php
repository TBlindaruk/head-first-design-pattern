<?php
class NYPizzaStore extends PizzaStore {
	protected function createPizza($item) {
		$pizza = NULL;
		$ingredientFactory = new NYPizzaIngredientFactory();
		
		if ($item == "cheese") {
			$pizza = new CheesePizza($ingredientFactory);
			$pizza->setName("New York Style Cheese Pizza");
		} else if ($item == "veggie") {
			$pizza = new VeggiePizza($ingredientFactory);
			$pizza->setName("New York Style Veggie Pizza");
		} else if ($item == "clam") {
			$pizza = new ClamPizza($ingredientFactory);
			$pizza->setName("New York Style Clam Pizza");
		} else if ($item == "pepperoni") {
			$pizza = new PepperoniPizza($ingredientFactory);
			$pizza->setName("New York Style Pepperoni Pizza");
		}
		return $pizza;
	}
}
?>