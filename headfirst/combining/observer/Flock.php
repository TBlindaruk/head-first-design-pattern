<?php
require_once "java/ArrayList.php";

class Flock implements Quackable {
	/**
	 * @var ArrayList
	 */
	protected $ducks;

	public function __construct() {
		$this->ducks = new ArrayList();
	}

	public function add(Quackable $duck) {
		
		$this->ducks->add($duck);
	}

	public function quack() {
		$iterator = $this->ducks->iterator();
		while ($iterator->hasNext()) {
			$duck = $iterator->next();
			$duck->quack();
		}
	}

	public function registerObserver(Observer $observer) {
		$iterator = $this->ducks->iterator();
		while ($iterator->hasNext()) {
			$duck = $iterator->next();
			$duck->registerObserver($observer);
		}
	}

	public function notifyObservers() { }

	public function __toString() {
		return "Flock of Ducks";
	}
}
?>