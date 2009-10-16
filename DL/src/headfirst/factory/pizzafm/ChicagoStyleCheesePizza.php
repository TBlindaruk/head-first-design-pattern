<?php
class ChicagoStyleCheesePizza extends Pizza {
	public function ChicagoStyleCheesePizza() { 
		$this->name = "Chicago Style Deep Dish Cheese Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";
		
		$this->toppings[] = "Shredded Mozzarella Cheese";
	}
	
	public function cut() {
		echo "Cutting the pizza into square slices<br>";
	}
}
?>