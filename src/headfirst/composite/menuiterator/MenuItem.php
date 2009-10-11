<?php
require_once "java/ArrayList.php";
require_once "java/MyIterator.php";

class MenuItem extends MenuComponent {
	protected $name;
	protected $description;
	protected $vegetarian;
	protected $price;

	public function __construct($name, 
			$description, 
			$vegetarian, 
			$price) 
	{
		$this->name = $name;
		$this->description = $description;
		$this->vegetarian = $vegetarian;
		$this->price = $price;
	}

	public function getName() {
		return $this->name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getPrice() {
		return $this->price;
	}

	public function isVegetarian() {
		return $this->vegetarian;
	}

	public function createIterator() {
		return new NullIterator();
	}

	public function myPrint() {
		print("  " . $this->getName());
		if ($this->isVegetarian()) {
			print("(v)");
		}
		println(", " . $this->getPrice());
		println("     -- " . $this->getDescription());
	}
}
