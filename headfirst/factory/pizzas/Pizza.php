<?php
abstract class Pizza {
	protected $name;
	protected $dough;
	protected $sauce;
	protected $toppings = Array();
	
	public function getName() {
		return $this->name;
	}
	
	public function prepare() {
		println("Preparing " . $this->name);
	}
	
	public function bake() {
		println("Baking " . $this->name);
	}
	
	public function cut() {
		println("Cutting " . $this->name);
	}
	
	public function box() {
		println("Boxing " . $this->name);
	}
	
	public function __toString() {
		// code to display pizza name and ingredients
		$display = "";
		$display .= "---- " . $this->name . " ----\n";
		$display .= $this->dough . "\n";
		$display .= $this->sauce . "\n";
		for ($i = 0; $i < count($this->toppings); $i++) {
			$display .= $this->toppings[$i] . "\n";
		}
		
		return $display;
	}
}
?>