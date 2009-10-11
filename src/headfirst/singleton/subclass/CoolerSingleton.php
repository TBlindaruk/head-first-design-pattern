<?php
class CoolerSingleton extends Singleton {
	// useful instance variables here
	protected static $uniqueInstance;

	private function __construct() {
		parent::__construct();
	}
	
	// useful methods here
}
?>