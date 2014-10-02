<?php
abstract class Pizza {
	protected $name;
	protected $dough;
	protected $sauce;
	protected $toppings = array();
	
	public function prepare() {
		println("Preparing " . $this->name);
		println("Tossing dough...");
		println("Adding sauce...");
		println("Adding toppings: ");
		for ($i = 0; $i < count($this->toppings); $i++) {
			println("   " . $this->toppings[$i]);
		}
	}
	
	public function bake() {
		println("Bake for 25 minutes at 350");
	}
	
	public function cut() {
		println("Cutting the pizza into diagonal slices");
	}
	
	public function box() {
		println("Place pizza in official PizzaStore box");
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function __toString() {
		$display = "";
		$display .= "---- " . $this->name . " ----\n";
		$display .= $this->dough . "\n";
		$display .= $this->sauce . "\n";
		for ($i = 0; $i < Count($this->toppings); $i++) {
			$display .= $this->toppings[$i] . "\n";
		}
		return $display;
	}
}
?>