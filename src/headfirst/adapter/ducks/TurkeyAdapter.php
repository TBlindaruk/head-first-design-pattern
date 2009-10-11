<?php
class TurkeyAdapter implements Duck {
	/**
	 * @var Turkey
	 */
	protected $turkey;

	public function __construct(Turkey $turkey) {
		$this->turkey = $turkey;
	}

	public function quack() {
		$this->turkey->gobble();
	}

	public function fly() {
		for($i=0; $i < 5; $i++) {
			$this->turkey->fly();
		}
	}
}
?>