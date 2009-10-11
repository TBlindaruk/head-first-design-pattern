<?php
require_once "custom/MyArrayIterator.php";

class IteratorEnumerationTestDrive {
	public static function main($args) {
		$iterator = new MyArrayIterator($args);
		$enumeration = new IteratorEnumeration($iterator);
		while ($enumeration->hasMoreElements()) {
			println($enumeration->nextElement());
		}
	}
}
?>