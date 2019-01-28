<?php
class NYStyleCheesePizza extends Pizza {
	public function NYStyleCheesePizza() {
		$this->name = "NY Style Sauce and Cheese Pizza";
		$this->dough = "Thin Crust Dough";
		$this->sauce = "Marinara Sauce";
		
		$this->toppings[] = "Grated Reggiano Cheese";
	}
}
?>