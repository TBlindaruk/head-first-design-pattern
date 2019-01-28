<?php
class Waitress {
	/**
	 * @var MenuComponent
	 */
	protected $allMenus;

	public function __construct(MenuComponent $allMenus) {
		$this->allMenus = $allMenus;
	}

	public function printMenu() {
		$this->allMenus->myPrint();
	}
	
	public function printVegetarianMenu() {
		$iterator = $this->allMenus->createIterator();

		println("\nVEGETARIAN MENU\n----");
		while ($iterator->hasNext()) {
			$menuComponent = $iterator->next();
			try {
				if ($menuComponent->isVegetarian()) {
					$menuComponent->myPrint();
				}
			} catch (BadMethodCallException $e) {}
		}
	}
}
