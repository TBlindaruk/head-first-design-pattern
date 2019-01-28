<?php
require_once "java/MyIterator.php";

class NullIterator implements MyIterator {
	public function next() {
		return NULL;
	}

	public function hasNext() {
		return FALSE;
	}

	public function remove() {
		throw new BadMethodCallException();
	}
}
?>