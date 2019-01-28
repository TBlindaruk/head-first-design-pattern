<?php
class ChicagoPizzaStore extends PizzaStore {
	public function createPizza($item) {
		if ($item == "cheese") {
			return new ChicagoStyleCheesePizza();
		} else if ($item == "veggie") {
			return new ChicagoStyleVeggiePizza();
		} else if ($item == "clam") {
			return new ChicagoStyleClamPizza();
		} else if ($item == "pepperoni") {
			return new ChicagoStylePepperoniPizza();
		} else return NULL;
	}
}
?>