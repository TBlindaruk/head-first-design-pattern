<?php
require_once "custom/MyArrayEnumeration.php";
require_once "custom/MyArrayIterator.php";

class EI {
	public static function main($args) {
		$enumeration = new MyArrayEnumeration($args);
		while ($enumeration->hasMoreElements()) {
			println($enumeration->nextElement());
		}
		$iterator = new MyArrayIterator($args);
		while ($iterator->hasNext()) {
			println($iterator->next());
		}
	}
}
?>