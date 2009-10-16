<?php
class DuckSimulator {
	public static function main(array $args = array()) {
		$simulator = new DuckSimulator();
		$duckFactory = new CountingDuckFactory();

		$simulator->simulate($duckFactory);
	}

	protected function simulate($duckFactoryOrQuackable) {
		if ($duckFactoryOrQuackable instanceof AbstractDuckFactory) {
			$redheadDuck = $duckFactoryOrQuackable->createRedheadDuck();
			$duckCall = $duckFactoryOrQuackable->createDuckCall();
			$rubberDuck = $duckFactoryOrQuackable->createRubberDuck();
			$gooseDuck = new GooseAdapter(new Goose());

			$flockOfDucks = new Flock();

			$flockOfDucks->add($redheadDuck);
			$flockOfDucks->add($duckCall);
			$flockOfDucks->add($rubberDuck);
			$flockOfDucks->add($gooseDuck);

			$flockOfMallards = new Flock();

			$mallardOne = $duckFactoryOrQuackable->createMallardDuck();
			$mallardTwo = $duckFactoryOrQuackable->createMallardDuck();
			$mallardThree = $duckFactoryOrQuackable->createMallardDuck();
			$mallardFour = $duckFactoryOrQuackable->createMallardDuck();

			$flockOfMallards->add($mallardOne);
			$flockOfMallards->add($mallardTwo);
			$flockOfMallards->add($mallardThree);
			$flockOfMallards->add($mallardFour);

			$flockOfDucks->add($flockOfMallards);

			println("\nDuck Simulator: With Observer");

			$quackologist = new Quackologist();
			$flockOfDucks->registerObserver($quackologist);

			$this->simulate($flockOfDucks);

			println("\nThe ducks quacked " . 
					QuackCounter::getQuacks() . 
					" times");
		} else if ($duckFactoryOrQuackable instanceof Quackable) {
			$duckFactoryOrQuackable->quack();
		}
	}
}
?>