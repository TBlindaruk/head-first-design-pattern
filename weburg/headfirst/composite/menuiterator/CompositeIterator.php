<?php
require_once "java/MyIterator.php";

class CompositeIterator implements MyIterator {
	/**
	 * @var array
	 */
	protected $stack = array();

	public function __construct(MyIterator $iterator) {
		array_push($this->stack, $iterator);
	}

	public function next() {
		if ($this->hasNext()) {
			$iterator = $this->stack[count($this->stack) - 1];
			$component = $iterator->next();
			if ($component instanceof Menu) {
				array_push($this->stack, $component->createIterator());
			} 
			return $component;
		} else {
			return NULL;
		}
	}

	public function hasNext() {
		if (count($this->stack) == 0) {
			return FALSE;
		} else {
			$iterator = $this->stack[count($this->stack) - 1];
			if (!$iterator->hasNext()) {
				array_pop($this->stack);
				return $this->hasNext();
			} else {
				return TRUE;
			}
		}
	}

	public function remove() {
		throw new BadMethodCallException();
	}
}
?>
