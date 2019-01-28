<?php
abstract class CaffeineBeverageWithHook {
	public function prepareRecipe() {
		$this->boilWater();
		$this->brew();
		$this->pourInCup();
		if ($this->customerWantsCondiments()) {
			$this->addCondiments();
		}
	}

	abstract protected function brew();

	abstract protected function addCondiments();

	protected function boilWater() {
		println("Boiling water");
	}

	protected function pourInCup() {
		println("Pouring into cup");
	}

	protected function customerWantsCondiments() {
		return true;
	}
}
?>
