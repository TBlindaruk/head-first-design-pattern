<?php
class DinerMenu implements Menu {
	const MAX_ITEMS = 6;
	protected $numberOfItems = 0;
	protected $menuItems;

	public function __construct() {
		$this->menuItems = array();

		$this->addItem("Vegetarian BLT",
			"(Fakin') Bacon with lettuce & tomato on whole wheat", TRUE, 2.99);
		$this->addItem("BLT",
			"Bacon with lettuce & tomato on whole wheat", FALSE, 2.99);
		$this->addItem("Soup of the day",
			"Soup of the day, with a side of potato salad", FALSE, 3.29);
		$this->addItem("Hotdog",
			"A hot dog, with saurkraut, relish, onions, topped with cheese",
			FALSE, 3.05);
		$this->addItem("Steamed Veggies and Brown Rice",
			"Steamed vegetables over brown rice", TRUE, 3.99);
		$this->addItem("Pasta",
			"Spaghetti with Marinara Sauce, and a slice of sourdough bread",
			TRUE, 3.89);
	}

	public function addItem($name, $description, 
			$vegetarian, $price) 
	{
		$menuItem = new MenuItem($name, $description, $vegetarian, $price);
		if ($this->numberOfItems >= self::MAX_ITEMS) {
			println("Sorry, menu is full!  Can't add item to menu");
		} else {
			$this->menuItems[$this->numberOfItems] = $menuItem;
			$this->numberOfItems = $this->numberOfItems + 1;
		}
	}

	public function getMenuItems() {
		return $this->menuItems;
	}

	public function createIterator() {
		return new DinerMenuIterator($this->menuItems);
		//return new AlternatingDinerMenuIterator(menuItems);
	}

	// other menu methods here
}
?>