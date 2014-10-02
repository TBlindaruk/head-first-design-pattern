<?php
class DependentPizzaStore {
	public function createPizza($style, $type) {
		$pizza = null;
		if ($style == "NY") {
			if (type == "cheese") {
				$pizza = new NYStyleCheesePizza();
			} else if (type.equals("veggie")) {
				$pizza = new NYStyleVeggiePizza();
			} else if (type.equals("clam")) {
				$pizza = new NYStyleClamPizza();
			} else if (type.equals("pepperoni")) {
				$pizza = new NYStylePepperoniPizza();
			}
		} else if ($style == "Chicago") {
			if (type == "cheese") {
				$pizza = new ChicagoStyleCheesePizza();
			} else if (type == "veggie") {
				$pizza = new ChicagoStyleVeggiePizza();
			} else if (type == "clam") {
				$pizza = new ChicagoStyleClamPizza();
			} else if (type == "pepperoni") {
				$pizza = new ChicagoStylePepperoniPizza();
			}
		} else {
			println("Error: invalid type of pizza");
			return NULL;
		}
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
}
?>
