<?php
abstract class Beverage {
	protected $description = "Unknown Beverage";
	
	public function getDescription() {
		return $this->description;
	}
	
	public abstract function cost();
}
?>