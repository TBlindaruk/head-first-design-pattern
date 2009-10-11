<?php
abstract class CaffeineBeverage {
	public final function prepareRecipe() {
		$this->boilWater();
		$this->brew();
		$this->pourInCup();
		$this->addCondiments();
	}

	abstract protected function brew();

	abstract protected function addCondiments();

	protected function boilWater() {
		println("Boiling water");
	}

	protected function pourInCup() {
		println("Pouring into cup");
	}
}
?>