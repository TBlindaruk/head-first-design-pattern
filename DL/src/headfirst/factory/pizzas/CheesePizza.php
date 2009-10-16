<?php
class CheesePizza extends Pizza {
	public function CheesePizza() {
		$this->name = "Cheese Pizza";
		$this->dough = "Regular Crust";
		$this->sauce = "Marinara Pizza Sauce";
		$this->toppings[] = "Fresh Mozzarella";
		$this->toppings[] = "Parmesan";
	}
}
?>