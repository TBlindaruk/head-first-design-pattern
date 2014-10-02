<?php
require_once "java/ArrayList.php";
require_once "java/MyIterator.php";

class ArrayListIterator implements MyIterator {
	/**
	 * @var ArrayList
	 */
	protected $items;
	protected $position = 0;

	public function __construct(ArrayList $items) {
		$this->items = $items;
	}

	public function next() {
		$object = $this->items->get($this->position);
		$this->position = $this->position + 1;
		return $object;
	}

	public function hasNext() {
		if ($this->position >= $this->items->size()) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function remove() {
		$this->items->remove($this->position);
	}
}
?>