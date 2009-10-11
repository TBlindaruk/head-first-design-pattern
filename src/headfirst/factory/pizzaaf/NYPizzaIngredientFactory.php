<?php
class NYPizzaIngredientFactory implements PizzaIngredientFactory {
	public function createDough() {
		return new ThinCrustDough();
	}
	
	public function createSauce() {
		return new MarinaraSauce();
	}
	
	public function createCheese() {
		return new ReggianoCheese();
	}
	
	public function createVeggies() {
		$veggies = array(new Garlic(), new Onion(), new Mushroom(), new RedPepper());
		return $veggies;
	}
	
	public function createPepperoni() {
		return new SlicedPepperoni();
	}
	
	public function createClam() {
		return new FreshClams();
	}
}
?>