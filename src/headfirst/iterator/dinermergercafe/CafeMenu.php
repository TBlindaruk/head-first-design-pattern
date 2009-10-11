<?php
require_once "custom/MyArrayIterator.php";

class CafeMenu implements Menu {
	protected $menuItems = array();

	public function __construct() {
		$this->addItem("Veggie Burger and Air Fries",
			"Veggie burger on a whole wheat bun, lettuce, tomato, and fries",
			TRUE, 3.99);
		$this->addItem("Soup of the day",
			"A cup of the soup of the day, with a side salad",
			FALSE, 3.69);
		$this->addItem("Burrito",
			"A large burrito, with whole pinto beans, salsa, guacamole",
			TRUE, 4.29);
	}

	public function addItem($name, $description, 
			$vegetarian, $price) 
	{
		$menuItem = new MenuItem($name, $description, $vegetarian, $price);
		$this->menuItems[$menuItem->getName()] = $menuItem;
	}

	public function getItems() {
		return ;
	}

	public function createIterator() {
		return new MyArrayIterator(array_values($this->menuItems));
	}
}
?>
