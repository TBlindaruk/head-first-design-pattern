<?php
require_once "java/MyEnumeration.php";

/*
 * Simple enumeration iterator
 */
class MyArrayEnumeration implements MyEnumeration {
	private $arrayElements = array();
	private $index = 0;
	
	public function __construct(&$array) {
		$this->arrayElements = &$array;
	}
	
	public function hasMoreElements() {
		return (isset($this->arrayElements[$this->index]) ? TRUE : FALSE);
	}

	public function nextElement() {
		if (isset($this->arrayElements[$this->index])) {
			return $this->arrayElements[$this->index++];
		} else {
			return new OutOfBoundsException();
		}
	}
}
?>