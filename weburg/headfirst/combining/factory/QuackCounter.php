<?php
class QuackCounter implements Quackable {
	/**
	 * @var Quackable
	 */
	protected $duck;
	/**
	 * @var integer
	 */
	protected static $numberOfQuacks;

	public function __construct(Quackable $duck) {
		$this->duck = $duck;
	}

	public function quack() {
		$this->duck->quack();
		self::$numberOfQuacks++;
	}

	public static function getQuacks() {
		return self::$numberOfQuacks;
	}

	public function __toString() {
		return $this->duck->__toString();
	}
}
?>
