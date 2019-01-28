<?php
require_once "java/MyIterator.php";

class DinerMenuIterator implements MyIterator {
	/**
	 * @var array
	 */
	protected $list;
	protected $position = 0;

	public function __construct(array $list) {
		$this->list = $list;
	}

	public function next() {
		$menuItem = $this->list[$this->position];
		$this->position = $this->position + 1;
		return $menuItem;
	}

	public function hasNext() {
		if ($this->position >= count($this->list) || $this->list[$this->position] == NULL) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function remove() {
		if ($this->position <= 0) {
			throw new BadMethodCallException
				("You can't remove an item until you've done at least one next()");
		}
		if ($this->list[$this->position-1] != NULL) {
			for ($i = $this->position-1; $i < (count($this->list)-1); $i++) {
				$this->list[$i] = $this->list[$i+1];
			}
			$this->list[count($this->list)-1] = NULL;
		}
	}
}
?>