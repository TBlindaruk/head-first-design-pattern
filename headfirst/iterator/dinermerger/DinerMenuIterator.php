<?php
class DinerMenuIterator implements My2Iterator {
	/**
	 * @var array
	 */
	protected $items;
	protected $position = 0;

	public function __construct(array $items) {
		$this->items = $items;
	}

	public function next() {
		$menuItem = $this->items[$this->position];
		$this->position = $this->position + 1;
		return $menuItem;
	}

	public function hasNext() {
		if ($this->position >= count($this->items) || $this->items[$this->position] == NULL) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	public function remove() {
		throw new UnsupportedOperationException();
	}
}
?>