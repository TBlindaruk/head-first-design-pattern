<?php
class DuckSimulator {
	public static function main(array $args = array()) {
		$simulator = new DuckSimulator();
		$simulator->simulate();
	}

	protected function simulate(Quackable $duck = NULL) {
		if ($duck == NULL) {
			$mallardDuck = new QuackCounter(new MallardDuck());
			$redheadDuck = new QuackCounter(new RedheadDuck());
			$duckCall = new QuackCounter(new DuckCall());
			$rubberDuck = new QuackCounter(new RubberDuck());
			$gooseDuck = new GooseAdapter(new Goose());
			
			println("\nDuck Simulator: With Decorator");
	
			$this->simulate($mallardDuck);
			$this->simulate($redheadDuck);
			$this->simulate($duckCall);
			$this->simulate($rubberDuck);
			$this->simulate($gooseDuck);
			
			println("The ducks quacked " . 
					QuackCounter::getQuacks() . " times");
		} else {
			$duck->quack();
		}
	}
}
?>