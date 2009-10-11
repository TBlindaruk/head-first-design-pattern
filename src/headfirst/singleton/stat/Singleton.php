<?php
class Singleton {
	//private static $uniqueInstance = new Singleton(); // Will not work in PHP
	
	private function __construct() {}
	
	// In PHP, disallow cloning of instance to enforce singleton
	public final function __clone() {
		throw new BadMethodCallException("Clone is not allowed");
	}
	
	public static function getInstance() {
		//return uniqueInstance;
	}
}
?>