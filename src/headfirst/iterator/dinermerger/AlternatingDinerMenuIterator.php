<?php
class AlternatingDinerMenuIterator implements My2Iterator {
	/**
	 * @var array of MenuItem
	 */
	protected $list;
	protected $position;

	public function __construct(array $list) {
		$this->list = $list;
		$this->position = (date('w', time()) + 1) % 2;
	}
	public function next() {
		$menuItem = $this->list[$this->position];
		$this->position = $this->position + 2;
		return $menuItem;
	}
	public function hasNext() {
		if ($this->position >= count($this->list) || $this->list[$this->position] == NULL) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function __toString() {
		return "Alternating Diner Menu Iterator";
	}
}
?>