<?php
class GumballMachine {
	const SOLD_OUT = 0;
	const NO_QUARTER = 1;
	const HAS_QUARTER = 2;
	const SOLD = 3;

	protected $state = self::SOLD_OUT;
	protected $count = 0;

	public function __construct($count) {
		$this->count = $count;
		if ($this->count > 0) {
			$this->state = self::NO_QUARTER;
		}
	}

	public function insertQuarter() {
		if ($this->state == self::HAS_QUARTER) {
			println("You can't insert another quarter");
		} else if ($this->state == self::NO_QUARTER) {
			$this->state = self::HAS_QUARTER;
			println("You inserted a quarter");
		} else if ($this->state == self::SOLD_OUT) {
			println("You can't insert a quarter, the machine is sold out");
		} else if ($this->state == self::SOLD) {
			println("Please wait, we're already giving you a gumball");
		}
	}

	public function ejectQuarter() {
		if ($this->state == self::HAS_QUARTER) {
			println("Quarter returned");
			$this->state = self::NO_QUARTER;
		} else if ($this->state == self::NO_QUARTER) {
			println("You haven't inserted a quarter");
		} else if ($this->state == self::SOLD) {
			println("Sorry, you already turned the crank");
		} else if ($this->state == self::SOLD_OUT) {
			println("You can't eject, you haven't inserted a quarter yet");
		}
	}

	public function turnCrank() {
		if ($this->state == self::SOLD) {
			println("Turning twice doesn't get you another gumball!");
		} else if ($this->state == self::NO_QUARTER) {
			println("You turned but there's no quarter");
		} else if ($this->state == self::SOLD_OUT) {
			println("You turned, but there are no gumballs");
		} else if ($this->state == self::HAS_QUARTER) {
			println("You turned...");
			$this->state = self::SOLD;
			$this->dispense();
		}
	}

	public function dispense() {
		if ($this->state == self::SOLD) {
			println("A gumball comes rolling out the slot");
			$this->count = $this->count - 1;
			if ($this->count == 0) {
				println("Oops, out of gumballs!");
				$this->state = self::SOLD_OUT;
			} else {
				$this->state = self::NO_QUARTER;
			}
		} else if ($this->state == self::NO_QUARTER) {
			println("You need to pay first");
		} else if ($this->state == self::SOLD_OUT) {
			println("No gumball dispensed");
		} else if ($this->state == self::HAS_QUARTER) {
			println("No gumball dispensed");
		}
	}

	public function refill($numGumBalls) {
		$this->count = $numGumBalls;
		$this->state = self::NO_QUARTER;
	}

	public function __toString() {
		$result = "";
		$result .= "\nMighty Gumball, Inc.";
		$result .= "\nPHP-enabled Standing Gumball Model #2004\n";
		$result .= "Inventory: " . $this->count . " gumball";
		if ($this->count != 1) {
			$result .= "s";
		}
		$result .= "\nMachine is ";
		if ($this->state == self::SOLD_OUT) {
			$result .= "sold out";
		} else if ($this->state == self::NO_QUARTER) {
			$result .= "waiting for quarter";
		} else if ($this->state == self::HAS_QUARTER) {
			$result .= "waiting for turn of crank";
		} else if ($this->state == self::SOLD) {
			$result .= "delivering a gumball";
		}
		$result .= "\n";
		return $result;
	}
}
?>
