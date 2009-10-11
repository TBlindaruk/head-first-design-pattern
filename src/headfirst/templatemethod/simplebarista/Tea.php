<?php
class Tea {
	public function prepareRecipe() {
		$this->boilWater();
		$this->steepTeaBag();
		$this->pourInCup();
		$this->addLemon();
	}

	public function boilWater() {
		println("Boiling water");
	}

	public function steepTeaBag() {
		println("Steeping the tea");
	}

	public function addLemon() {
		println("Adding Lemon");
	}

	public function pourInCup() {
		println("Pouring into cup");
	}
}
?>