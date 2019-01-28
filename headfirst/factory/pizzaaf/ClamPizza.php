<?php
class ClamPizza extends Pizza {
	/**
	 * @var PizzaIngredientFactory
	 */
	protected $ingredientFactory;
	
	public function __construct(PizzaIngredientFactory $ingredientFactory) {
		$this->ingredientFactory = $ingredientFactory;
	}
	
	public function prepare() {
		println("Preparing " . $this->name);
		$this->dough = $this->ingredientFactory->createDough();
		$this->sauce = $this->ingredientFactory->createSauce();
		$this->cheese = $this->ingredientFactory->createCheese();
		$this->clam = $this->ingredientFactory->createClam();
	}
}
?>