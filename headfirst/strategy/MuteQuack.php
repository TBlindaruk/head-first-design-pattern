<?php
class MuteQuack implements QuackBehavior {
	public function quack() {
		println("[[ Silence ]]");
	}
}
?>