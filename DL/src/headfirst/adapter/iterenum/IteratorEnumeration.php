<?php
require_once "java/MyEnumeration.php";
require_once "java/MyIterator.php";

class IteratorEnumeration implements MyEnumeration {
	/**
	 * @var MyIterator
	 */
	protected $iterator;

	public function __construct(MyIterator $iterator) {
		$this->iterator = $iterator;
	}

	public function hasMoreElements() {
		return $this->iterator->hasNext();
	}

	public function nextElement() {
		return $this->iterator->next();
	}
}
?>