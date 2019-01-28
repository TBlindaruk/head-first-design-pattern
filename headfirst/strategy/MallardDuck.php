<?php
class MallardDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Quack();
	}
	
	public function display() {
		println("I'm a real Mallard duck");
	}
}
?>