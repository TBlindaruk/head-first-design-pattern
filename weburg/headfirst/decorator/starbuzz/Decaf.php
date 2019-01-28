<?php
class Decaf extends Beverage {
	public function __construct() {
		$this->description = "Decaf Coffee";
	}
	
	public function cost() {
		return 1.05;
	}
}
?>