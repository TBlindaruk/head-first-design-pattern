<?php
class Tea extends CaffeineBeverage {
	public function brew() {
		println("Steeping the tea");
	}
	
	public function addCondiments() {
		println("Adding Lemon");
	}
}
?>