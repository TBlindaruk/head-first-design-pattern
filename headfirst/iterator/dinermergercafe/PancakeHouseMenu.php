<?php
require_once "java/ArrayList.php";

class PancakeHouseMenu implements Menu {
	/**
	 * @var ArrayList
	 */
	protected $menuItems;

	public function __construct() {
		$this->menuItems = new ArrayList();
		
		$this->addItem("K&B's Pancake Breakfast", 
			"Pancakes with scrambled eggs, and toast", 
			TRUE,
			2.99);

		$this->addItem("Regular Pancake Breakfast", 
			"Pancakes with fried eggs, sausage", 
			FALSE,
			2.99);

		$this->addItem("Blueberry Pancakes",
			"Pancakes made with fresh blueberries, and blueberry syrup",
			TRUE,
			3.49);

		$this->addItem("Waffles",
			"Waffles, with your choice of blueberries or strawberries",
			TRUE,
			3.59);
	}

	public function addItem($name, $description,
			$vegetarian, $price)
	{
		$menuItem = new MenuItem($name, $description, $vegetarian, $price);
		$this->menuItems->add($menuItem);
	}

	public function getMenuItems() {
		return $this->menuItems;
	}

	public function createIterator() {
		return $this->menuItems->iterator();
	}

	// other menu methods here
}
