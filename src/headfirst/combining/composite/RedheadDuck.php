<?php
class RedheadDuck implements Quackable {
	public function quack() {
		println("Quack");
	}

	public function __toString() {
		return "Redhead Duck";
	}
}
?>