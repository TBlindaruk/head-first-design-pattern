<?php
class Coffee extends CaffeineBeverage {
	public function brew() {
		println("Dripping Coffee through filter");
	}
	public function addCondiments() {
		println("Adding Sugar and Milk");
	}
}
?>