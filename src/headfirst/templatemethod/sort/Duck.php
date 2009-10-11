<?php
require_once "java/Comparable.php";

class Duck implements Comparable {
	protected $name;
	protected $weight;

	public function __construct($name, $weight) {
		$this->name = $name;
		$this->weight = $weight;
	}

	public function __toString() {
		return $this->name . " weighs " . $this->weight;
	}

	public function compareTo(Comparable $otherDuck) {
		if ($this->weight < $otherDuck->weight) {
			return -1;
		} else if ($this->weight == $otherDuck->weight) {
			return 0;
		} else { // $this->weight > otherDuck->weight
			return 1;
		}
	}
}
?>
