<?php
class DecoyDuck implements Quackable {
	public function quack() {
		println("<< Silence >>");
	}
	
	public function __toString() {
		return "Decoy Duck";
	}
}
?>