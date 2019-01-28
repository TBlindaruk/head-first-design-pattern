<?php
class ModelDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Quack();
	}
	
	public function display() {
		println("I'm a model duck");
	}
}
?>