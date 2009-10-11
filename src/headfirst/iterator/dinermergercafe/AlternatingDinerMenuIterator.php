<?php
require_once "java/MyIterator.php";

class AlternatingDinerMenuIterator implements MyIterator {
	/**
	 * @var array of MenuItem
	 */
	protected $items;
	protected $position;

	public function __construct(array $list) {
		$this->items = $list;
		$this->position = (date('w', time()) + 1) % 2;
	}
	public function next() {
		$menuItem = $this->items[$this->position];
		$this->position = $this->position + 2;
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
		throw new UnsupportedOperationException(
			"Alternating Diner Menu Iterator does not support remove()");
	}
}
?>