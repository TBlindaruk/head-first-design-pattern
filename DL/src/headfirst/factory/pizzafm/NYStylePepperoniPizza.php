<?php
class NYStylePepperoniPizza extends Pizza {
	public function NYStylePepperoniPizza() {
		$this->name = "NY Style Pepperoni Pizza";
		$this->dough = "Thin Crust Dough";
		$this->sauce = "Marinara Sauce";
		
		$this->toppings[] = "Grated Reggiano Cheese";
		$this->toppings[] = "Sliced Pepperoni";
		$this->toppings[] = "Garlic";
		$this->toppings[] = "Onion";
		$this->toppings[] = "Mushrooms";
		$this->toppings[] = "Red Pepper";
	}
}
?>