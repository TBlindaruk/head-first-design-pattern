<?php
class RubberDuck implements Quackable {
	public function quack() {
		println("Squeak");
	}
	
	public function __toString() {
		return "Rubber Duck";
	}
}
?>