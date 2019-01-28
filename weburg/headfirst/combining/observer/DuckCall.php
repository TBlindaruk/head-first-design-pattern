<?php
class DuckCall implements Quackable {
	/**
	 * @var Observable
	 */
	protected $observable;

	public function __construct() {
		$this->observable = new Observable($this);
	}

	public function quack() {
		println("Kwak");
		$this->notifyObservers();
	}

	public function registerObserver(Observer $observer) {
		$this->observable->registerObserver($observer);
	}

	public function notifyObservers() {
		$this->observable->notifyObservers();
	}

	public function __toString() {
		return "Duck Call";
	}
}
?>