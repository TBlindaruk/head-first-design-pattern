<?php
class Waitress {
	/**
	 * @var PancakeHouseMenu
	 */
	protected $pancakeHouseMenu;
	/**
	 * @var DinerMenu
	 */
	protected $dinerMenu;

	public function __construct(PancakeHouseMenu $pancakeHouseMenu, DinerMenu $dinerMenu) {
		$this->pancakeHouseMenu = $pancakeHouseMenu;
		$this->dinerMenu = $dinerMenu;
	}

	public function printMenu(My2Iterator $iterator = NULL) {
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

	public function isItemVegetarian($name) {
		$breakfastIterator = $this->pancakeHouseMenu->createIterator();
		if ($this->isVegetarian($name, $breakfastIterator)) {
			return TRUE;
		}
		$dinnerIterator = $this->$dinerMenu->createIterator();
		if ($this->isVegetarian($name, $dinnerIterator)) {
			return TRUE;
		}
		return FALSE;
	}

	private function printVegetarianMenu(My2Iterator $iterator = NULL) {
		if ($iterator == NULL) {
			printVegetarianMenu($this->pancakeHouseMenu->createIterator());
			printVegetarianMenu($this->dinerMenu->createIterator());
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

	private function isVegetarian($name, My2Iterator $iterator) {
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