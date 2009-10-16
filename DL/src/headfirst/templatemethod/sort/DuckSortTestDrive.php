<?php
require_once "java/Comparable.php";

class DuckSortTestDrive {
	public static function main(array $args = array()) {
		$ducks = array(
						new Duck("Daffy", 8),
						new Duck("Dewey", 2),
						new Duck("Howard", 7),
						new Duck("Louie", 2),
						new Duck("Donald", 10),
						new Duck("Huey", 2)
		);

		println("Before sorting:");
		self::display($ducks);
		
		// PHP implements its own sorting pattern, so using that.
		// This replaces Java's Arrays.sort() call.
		usort($ducks, array("DuckSortTestDrive", "sortDuckArrays"));

		println("\nAfter sorting:");
		self::display($ducks);
	}

	public static function display(array $ducks) {
		for ($i = 0; $i < count($ducks); $i++) {
			println($ducks[$i]);
		}
	}

	// Added, custom PHP sort function that goes into usort
	public static function sortDuckArrays(Comparable $duck1, Comparable $duck2) {
		return $duck1->compareTo($duck2);
	}
}
?>