<?php
class GarageDoor {
	public function __construct() {
	}

	public function up() {
		println("Garage Door is Open");
	}

	public function down() {
		println("Garage Door is Closed");
	}

	public function stop() {
		println("Garage Door is Stopped");
	}

	public function lightOn() {
		println("Garage light is on");
	}

	public function lightOff() {
		println("Garage light is off");
	}
}
?>