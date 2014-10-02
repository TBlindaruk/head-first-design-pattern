<?php
class DuckFactory extends AbstractDuckFactory {
	public function createMallardDuck() {
		return new MallardDuck();
	}

	public function createRedheadDuck() {
		return new RedheadDuck();
	}

	public function createDuckCall() {
		return new DuckCall();
	}

	public function createRubberDuck() {
		return new RubberDuck();
	}
}
?>