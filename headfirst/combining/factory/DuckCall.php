<?php
class DuckCall implements Quackable {
	public function quack() {
		println("Kwak");
	}
	
	public function __toString() {
		return "Duck Call";
	}
}
?>