<?php
class RubberDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Squeak();
	}
	
	public function display() {
		println("I'm a rubber duckie");
	}
}
?>