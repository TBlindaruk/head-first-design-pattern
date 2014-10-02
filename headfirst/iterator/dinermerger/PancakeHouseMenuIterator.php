<?php
require_once "java/ArrayList.php";

class PancakeHouseMenuIterator implements My2Iterator {
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
}
?>