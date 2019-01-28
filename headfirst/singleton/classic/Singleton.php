<?php
// NOTE: This is not thread safe in Java!
// In PHP, it doesn't matter. Request scope is sandboxed (share-nothing).

class Singleton {
	/**
	 * @var Singleton
	 */
	private static $uniqueInstance;
	
	// other useful instance variables here
	public $value = 0;
	
	private function __construct() {}
	
	// In PHP, disallow cloning of instance to enforce singleton
	public final function __clone() {
		throw new BadMethodCallException("Clone is not allowed");
	}
	
	public static function getInstance() {
		if (self::$uniqueInstance == NULL) {
			self::$uniqueInstance = new Singleton();
		}
		return self::$uniqueInstance;
	}
	// other useful methods here
}
?>