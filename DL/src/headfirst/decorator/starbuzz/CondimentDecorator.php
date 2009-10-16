<?php
abstract class CondimentDecorator extends Beverage {
	// getDescription already made concrete in parent class, cannot make such a
	// concrete method abstract in abstract child classes in PHP5, so will have
	// to explicitly require overriding getDescription in child classes
	public function getDescription() {
		throw new Exception("getDescription must be overridden when inheriting from CondimentDecorator");
	}
}
?>