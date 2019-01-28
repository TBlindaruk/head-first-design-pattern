<?php
interface State {
	public function insertQuarter();
	public function ejectQuarter();
	public function turnCrank();
	public function dispense();
}
?>