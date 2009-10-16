<?php
class RedHeadDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Quack();
	}
	
	public function display() {
		println("I'm a real Red Headed duck");
	}
}
?>