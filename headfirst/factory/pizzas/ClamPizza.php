<?php
class ClamPizza extends Pizza {
	public function ClamPizza() {
		$this->name = "Clam Pizza";
		$this->dough = "Thin crust";
		$this->sauce = "White garlic sauce";
		$this->toppings[] = "Clams";
		$this->toppings[] = "Grated parmesan cheese";
	}
}
?>