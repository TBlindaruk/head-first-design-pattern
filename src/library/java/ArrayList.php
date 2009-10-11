<?php
require_once "java/ArrayListIterator.php";

/**
 * Basic implementation of Java's ArrayList
 */
class ArrayList {
	private $array = array();
	
	public function get($index) {
		return $this->array[$index];
	}
	
	public function set($index, $element) {
		$oldElement = $this->array[$index];
		$this->array[$index] = $element;
		
		return $oldElement;
	}
	
	public function add($element) {
		$this->array[] = $element;
	}
	
	public function remove($index) {
		if (isset($this->array[$index])) {
			$oldElement = $this->array[$index];
			unset($this->array[$index]);
			$this->array = array_values($this->array);
		} else {
			throw new OutOfBoundsException("Index $index out of bounds");
		}
		
		return $oldElement;
	}
	
	public function size() {
		return count($this->array);
	}
	
	public function indexOf($element) {
		$index = array_search($element, $this->array, TRUE); // TRUE is needed to get around recursive object issue
		return ($index !== FALSE ? $index : -1);
	}
	
	public function iterator() {
		return new ArrayListIterator($this);
	}
}
?>