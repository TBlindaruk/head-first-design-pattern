<?php
/*
 * Mimic Java's Iterator
 */
interface MyIterator {
	public function hasNext();

	public function next();

	public function remove();
}
?>