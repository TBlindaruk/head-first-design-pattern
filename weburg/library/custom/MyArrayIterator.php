<?php
require_once "java/MyIterator.php";

/*
 * Simple array iterator
 */
class MyArrayIterator implements MyIterator {
	private $arrayElements = array();
	private $index = 0;
	private $nextCalled = FALSE;
	
	public function __construct(&$array) {
		$this->arrayElements = &$array;
	}
	
	public function hasNext() {
		return (isset($this->arrayElements[$this->index]) ? TRUE : FALSE);
	}

	public function next() {
		if (isset($this->arrayElements[$this->index])) {
			$this->nextCalled = TRUE;
			return $this->arrayElements[$this->index++];
		} else {
			throw new OutOfBoundsException("MyIterator out of bounds");
		}
	}

	public function remove() {
		if ($this->nextCalled) {
			if (isset($this->arrayElements[$this->index - 1])) {
				$this->nextCalled = FALSE;
				$oldElement = $this->arrayElements[$this->index - 1];
				unset($this->arrayElements[$this->index - 1]);
				$this->arrayElements = array_values($this->arrayElements);
				$this->index--;
				return $oldElement;
			}
		} else {
			throw new BadMethodCallException("Can't call remove unless next has been called at least once or since last remove");
		}
	}
}
?>