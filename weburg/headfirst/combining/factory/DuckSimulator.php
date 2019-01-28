<?php
class DuckSimulator {
	public static function main(array $args = array()) {
		$simulator = new DuckSimulator();
		$duckFactory = new CountingDuckFactory();

		$simulator->simulate($duckFactory);
	}

	protected function simulate($duckFactoryOrQuackable) {
		if ($duckFactoryOrQuackable instanceof AbstractDuckFactory) {
			$mallardDuck = $duckFactoryOrQuackable->createMallardDuck();
			$redheadDuck = $duckFactoryOrQuackable->createRedheadDuck();
			$duckCall = $duckFactoryOrQuackable->createDuckCall();
			$rubberDuck = $duckFactoryOrQuackable->createRubberDuck();
			$gooseDuck = new GooseAdapter(new Goose());

			println("\nDuck Simulator: With Abstract Factory");

			$this->simulate($mallardDuck);
			$this->simulate($redheadDuck);
			$this->simulate($duckCall);
			$this->simulate($rubberDuck);
			$this->simulate($gooseDuck);

			println("The ducks quacked " . 
					QuackCounter::getQuacks() . 
					" times");
		} else if ($duckFactoryOrQuackable instanceof Quackable) {
			$duckFactoryOrQuackable->quack();
		}
	}
}
?>