<?php
abstract class Pizza {
	protected $name;
	
	protected $dough;
	protected $sauce;
	protected $veggies = array();
	protected $cheese;
	protected $pepperoni;
	protected $clam;
	
	public abstract function prepare();
	
	public function bake() {
		println("Bake for 25 minutes at 350");
	}
	
	public function cut() {
		println("Cutting the pizza into diagonal slices");
	}
	
	public function box() {
		println("Place pizza in official PizzaStore box");
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function __toString() {
		$result = "";
		$result .= "---- " . $this->name . " ----\n";
		if ($this->dough != NULL) {
			$result .= $this->dough;
			$result .= "\n";
		}
		if ($this->sauce != NULL) {
			$result .= $this->sauce;
			$result .= "\n";
		}
		if ($this->cheese != NULL) {
			$result .= $this->cheese;
			$result .= "\n";
		}
		if ($this->veggies != NULL) {
			for ($i = 0; $i < count($this->veggies); $i++) {
				$result .= $this->veggies[$i];
				if ($i < count($this->veggies) - 1) {
					$result .= ", ";
				}
			}
			$result .= "\n";
		}
		if ($this->clam != NULL) {
			$result .= $this->clam;
			$result .= "\n";
		}
		if ($this->pepperoni != NULL) {
			$result .= $this->pepperoni;
			$result .= "\n";
		}
		return $result;
	}
}
?>