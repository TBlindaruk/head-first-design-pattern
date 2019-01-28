<?php
class Singleton {
	/**
	 * @var Singleton
	 */
	protected static $uniqueInstance;

	// other useful instance variables here

	protected function __construct() {}

	// In PHP, disallow cloning of instance to enforce singleton
	public final function __clone() {
		throw new BadMethodCallException("Clone is not allowed");
	}
	
	public static function getInstance() {
		if (self::$uniqueInstance == null) {
			self::$uniqueInstance = new Singleton();
		}
		return self::$uniqueInstance;
	}
	
	// Added so object can be converted to string in PHP
	public function __toString() {
		return spl_object_hash(self::$uniqueInstance);
	}

	// other useful methods here
}
?>