<?php
class ChicagoStylePepperoniPizza extends Pizza {
	public function ChicagoStylePepperoniPizza() {
		$this->name = "Chicago Style Pepperoni Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";
		
		$this->toppings[] = "Shredded Mozzarella Cheese";
		$this->toppings[] = "Black Olives";
		$this->toppings[] = "Spinach";
		$this->toppings[] = "Eggplant";
		$this->toppings[] = "Sliced Pepperoni";
	}
	
	public function cut() {
		println("Cutting the pizza into square slices");
	}
}
?>