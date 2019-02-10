<?php
class Coffee {
	public function prepareRecipe() {
		$this->boilWater();
		$this->brewCoffeeGrinds();
		$this->pourInCup();
		$this->addSugarAndMilk();
	}

	public function boilWater() {
		println("Boiling water");
	}

	public function brewCoffeeGrinds() {
		println("Dripping Coffee through filter");
	}

	public function pourInCup() {
		println("Pouring into cup");
	}

	public function addSugarAndMilk() {
		println("Adding Sugar and Milk");
	}
}
?>