<?php
class MenuTestDrive {
	public static function main($args) {
		$pancakeHouseMenu = new PancakeHouseMenu();
		$dinerMenu = new DinerMenu();
		$waitress = new Waitress($pancakeHouseMenu, $dinerMenu);
		$waitress->printMenu();
		$waitress->printVegetarianMenu();

		println("\nCustomer asks, is the Hotdog vegetarian?");
		print("Waitress says: ");
		if ($waitress->isItemVegetarian("Hotdog")) {
			println("Yes");
		} else {
			println("No");
		}
		println("\nCustomer asks, are the Waffles vegetarian?");
		print("Waitress says: ");
		if ($waitress->isItemVegetarian("Waffles")) {
			println("Yes");
		} else {
			println("No");
		}
	}
}
