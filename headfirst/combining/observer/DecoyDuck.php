<?php
class DecoyDuck implements Quackable {
	/**
	 * @var Observable
	 */
	protected $observable;

	public function __construct() {
		$this->observable = new Observable($this);
	}

	public function quack() {
		println("<< Silence >>");
		$this->notifyObservers();
	}

	public function registerObserver(Observer $observer) {
		$this->observable->registerObserver($observer);
	}

	public function notifyObservers() {
		$this->observable->notifyObservers();
	}

	public function __toString() {
		return "Decoy Duck";
	}
}
?>