<?php
require_once "java/MyIterator.php";

class Waitress {
	/**
	 * @var Menu
	 */
	protected $pancakeHouseMenu;
	/**
	 * @var Menu
	 */
	protected $dinerMenu;

	public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu) {
		$this->pancakeHouseMenu = $pancakeHouseMenu;
		$this->dinerMenu = $dinerMenu;
	}

	public function printMenu(MyIterator $iterator = NULL) {
		if ($iterator == NULL) {
			$pancakeIterator = $this->pancakeHouseMenu->createIterator();
			$dinerIterator = $this->dinerMenu->createIterator();
	
			println("MENU\n----\nBREAKFAST");
			$this->printMenu($pancakeIterator);
			println("\nLUNCH");
			$this->printMenu($dinerIterator);
		} else {
			while ($iterator->hasNext()) {
				$menuItem = $iterator->next();
				print($menuItem->getName() . ", ");
				print($menuItem->getPrice() . " -- ");
				println($menuItem->getDescription());
			}
		}
	}

	public function printVegetarianMenu(MyIterator $iterator = NULL) {
		if ($iterator == NULL) {
			println("\nVEGETARIAN MENU\n----\nBREAKFAST");
			$this->printVegetarianMenu($this->pancakeHouseMenu->createIterator());
			println("\nLUNCH");
			$this->printVegetarianMenu($this->dinerMenu->createIterator());
		} else {
			while ($iterator->hasNext()) {
				$menuItem = $iterator->next();
				if ($menuItem->isVegetarian()) {
					print($menuItem->getName());
					println("\t\t" . $menuItem->getPrice());
					println("\t" . $menuItem->getDescription());
				}
			}
		}
	}

	public function isItemVegetarian($name) {
		$pancakeIterator = $this->pancakeHouseMenu->createIterator();
		if ($this->isVegetarian($name, $pancakeIterator)) {
			return TRUE;
		}
		$dinerIterator = $this->dinerMenu->createIterator();
		if ($this->isVegetarian($name, $dinerIterator)) {
			return TRUE;
		}
		return FALSE;
	}

	private function isVegetarian($name, MyIterator $iterator) {
		while ($iterator->hasNext()) {
			$menuItem = $iterator->next();
			if ($menuItem->getName() == $name) {
				if ($menuItem->isVegetarian()) {
					return TRUE;
				}
			}
		}
		return FALSE;
	}
}
?>