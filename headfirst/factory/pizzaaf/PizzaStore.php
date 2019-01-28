<?php
abstract class PizzaStore {
	protected abstract function createPizza($item);
	
	public function orderPizza($type) {
		$pizza = $this->createPizza($type);
		println("--- Making a " . $pizza->getName() . " ---");
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
}
?>