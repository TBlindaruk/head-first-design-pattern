<?php
class Goose {
	public function honk() {
		println("Honk");
	}

	public function __toString() {
		return "Goose";
	}
}
?>