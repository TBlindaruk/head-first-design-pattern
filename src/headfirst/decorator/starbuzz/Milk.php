<?php
class Milk extends CondimentDecorator {
	/**
	 * @var Beverage
	 */
	private $beverage;
	
	public function __construct(Beverage $beverage) {
		$this->beverage = $beverage;
	}
	
	public function getDescription() {
		return $this->beverage->getDescription() . ", Milk";
	}
	
	public function cost() {
		return .10 + $this->beverage->cost();
	}
}
?>