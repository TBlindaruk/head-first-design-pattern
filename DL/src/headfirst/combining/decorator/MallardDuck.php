<?php
class MallardDuck implements Quackable {
	public function quack() {
		println("Quack");
	}
	
	public function __toString() {
		return "Mallard Duck";
	}
}
?>