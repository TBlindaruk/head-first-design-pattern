<?php
class Quackologist implements Observer {
	public function update(QuackObservable $duck) {
		println("Quackologist: " . $duck . " just quacked.");
	}

	public function __toString() {
		return "Quackologist";
	}
}
?>