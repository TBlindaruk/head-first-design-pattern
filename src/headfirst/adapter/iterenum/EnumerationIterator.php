<?php
require_once "java/MyEnumeration.php";
require_once "java/MyIterator.php";

class EnumerationIterator implements MyIterator {
	/**
	 * @var MyEnumeration
	 */
	protected $enumeration;

	public function __construct(MyEnumeration $enumeration) {
		$this->enumeration = $enumeration;
	}

	public function hasNext() {
		return $this->enumeration->hasMoreElements();
	}

	public function next() {
		return $this->enumeration->nextElement();
	}

	public function remove() {
		throw new UnsupportedOperationException();
	}
}
?>