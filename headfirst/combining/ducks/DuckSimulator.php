<?php
class DuckSimulator {
	public static function main(array $args = array()) {
		$simulator = new DuckSimulator();
		$simulator->simulate();
	}

	protected function simulate(Quackable $duck = NULL) {
		if ($duck == NULL) {
			$mallardDuck = new MallardDuck();
			$redheadDuck = new RedheadDuck();
			$duckCall = new DuckCall();
			$rubberDuck = new RubberDuck();
	
			println("\nDuck Simulator");
	
			$this->simulate($mallardDuck);
			$this->simulate($redheadDuck);
			$this->simulate($duckCall);
			$this->simulate($rubberDuck);
		} else {
			$duck->quack();
		}
	}
}
?>