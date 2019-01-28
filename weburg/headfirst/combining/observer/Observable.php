<?php
require_once "java/ArrayList.php";

class Observable implements QuackObservable {
	/**
	 * @var ArrayList
	 */
	protected $observers;
	/**
	 * @var QuackObservable
	 */
	protected $duck;

	public function __construct(QuackObservable $duck) {
		$this->observers = new ArrayList();
		$this->duck = $duck;
	}

	public function registerObserver(Observer $observer) {
		$this->observers->add($observer);
	}

	public function notifyObservers() {
		$iterator = $this->observers->iterator();
		while ($iterator->hasNext()) {
			$observer = $iterator->next();
			$observer->update($this->duck);
		}
	}

	public function getObservers() {
		return $this->observers->iterator();
	}
}
?>