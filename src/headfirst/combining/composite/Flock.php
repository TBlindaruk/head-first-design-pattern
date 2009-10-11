<?php
require_once "java/ArrayList.php";

class Flock implements Quackable {
	/**
	 * @var ArrayList
	 */
	protected $quackers;
	
	public function __construct() {
		$this->quackers = new ArrayList();
	}
	
	public function add(Quackable $quacker) {
		$this->quackers->add($quacker);
	}

	public function quack() {
		$iterator = $this->quackers->iterator();
		while ($iterator->hasNext()) {
			$quacker = $iterator->next();
			$quacker->quack();
		}
	}

	public function __toString() {
		return "Flock of Quackers";
	}
}
?>