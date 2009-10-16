<?php
class MenuTestDrive {
	public static function main($args) {
		$pancakeHouseMenu = new PancakeHouseMenu();
		$dinerMenu = new DinerMenu();

		$waitress = new Waitress($pancakeHouseMenu, $dinerMenu);

		$waitress->printMenu();
	}

	public static function printMenu() {
		$pancakeHouseMenu = new PancakeHouseMenu();
		$dinerMenu = new DinerMenu();

		$breakfastItems = $pancakeHouseMenu->getMenuItems();

		for ($i = 0; $i < $breakfastItems->size(); $i++) {
			$menuItem = $breakfastItems->get($i);
			print($menuItem->getName());
			println("\t\t" . $menuItem->getPrice());
			println("\t" . $menuItem->getDescription());
		}

		$lunchItems = $dinerMenu->getMenuItems();

		for ($i = 0; $i < count($lunchItems); $i++) {
			$menuItem = $lunchItems[$i];
			print($menuItem->getName());
			println("\t\t" . $menuItem->getPrice());
			println("\t" . $menuItem->getDescription());
		}
	}
}
?>