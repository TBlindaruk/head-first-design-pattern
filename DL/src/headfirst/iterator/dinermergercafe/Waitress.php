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
	/**
	 * @var Menu
	 */
	protected $cafeMenu;

	public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu, Menu $cafeMenu) {
		$this->pancakeHouseMenu = $pancakeHouseMenu;
		$this->dinerMenu = $dinerMenu;
		$this->cafeMenu = $cafeMenu;
	}

	public function printMenu(MyIterator $iterator = NULL) {
		if ($iterator == NULL) {
			$pancakeIterator = $this->pancakeHouseMenu->createIterator();
			$dinerIterator = $this->dinerMenu->createIterator();
			$cafeIterator = $this->cafeMenu->createIterator();
	
			println("MENU\n----\nBREAKFAST");
			$this->printMenu($pancakeIterator);
			println("\nLUNCH");
			$this->printMenu($dinerIterator);
			println("\nDINNER");
			$this->printMenu($cafeIterator);
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
			println("\nVEGETARIAN MENU\n---------------");
			$this->printVegetarianMenu($this->pancakeHouseMenu->createIterator());
			$this->printVegetarianMenu($this->dinerMenu->createIterator());
			$this->printVegetarianMenu($this->cafeMenu->createIterator());
		} else {
			while ($iterator->hasNext()) {
				$menuItem = $iterator->next();
				if ($menuItem->isVegetarian()) {
					print($menuItem->getName() . ", ");
					print($menuItem->getPrice() . " -- ");
					println($menuItem->getDescription());
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
		$cafeIterator = $this->cafeMenu->createIterator();
		if ($this->isVegetarian($name, $cafeIterator)) {
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
//^^ WaitressCafeMain
//^^ WaitressCafe
?>