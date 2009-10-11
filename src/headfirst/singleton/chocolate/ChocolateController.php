<?php
class ChocolateController {
	public static function main(array $args = array()) {
		$boiler = ChocolateBoiler::getInstance();
		$boiler->fill();
		$boiler->boil();
		$boiler->drain();
		
		// will return the existing instance
		$boiler2 = ChocolateBoiler::getInstance();
	}
}
?>