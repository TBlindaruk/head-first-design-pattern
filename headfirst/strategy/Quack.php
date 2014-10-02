<?php
class Quack implements QuackBehavior {
	public function __construct() {} // Needed so that quack isn't called as the constructor
	
	public function quack() {
		println("Quack");
	}
}
?>