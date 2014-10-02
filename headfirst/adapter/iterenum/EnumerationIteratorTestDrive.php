<?php
require_once "custom/MyArrayEnumeration.php";

class EnumerationIteratorTestDrive {
	public static function main($args) {
		$enumeration = new MyArrayEnumeration($args);
		$iterator = new EnumerationIterator($enumeration);
		while ($iterator->hasNext()) {
			println($iterator->next());
		}
	}
}
?>