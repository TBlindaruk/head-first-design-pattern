<?php
require_once "java/ArrayList.php";
require_once "java/MyIterator.php";

class Waitress {
	/**
	 * @var ArrayList
	 */
	protected $menus;

	public function __construct(ArrayList $menus) {
		$this->menus = $menus;
	}

	public function printMenu(MyIterator $iterator = NULL) {
		if ($iterator == NULL) {
			$menuIterator = $this->menus->iterator();
			while($menuIterator->hasNext()) {
				$menu = $menuIterator->next();
				printMenu($menu->createIterator());
			}
		} else {
			while ($iterator->hasNext()) {
				$menuItem = $iterator->next();
				print($menuItem->getName() . ", ");
				print($menuItem->getPrice() . " -- ");
				println($menuItem->getDescription());
			}
		}
	}
}
?>
