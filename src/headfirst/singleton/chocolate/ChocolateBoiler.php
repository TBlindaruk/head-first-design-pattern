<?php
class ChocolateBoiler {
	/**
	 * @var boolean
	 */
	private $empty;
	/**
	 * @var boolean
	 */
	private $boiled;
	/**
	 * @var ChocolateBoiler
	 */
	private static $uniqueInstance;
	
	private function __construct() {
		$this->empty = TRUE;
		$this->boiled = FALSE;
	}
	
	// In PHP, disallow cloning of instance to enforce singleton
	public final function __clone() {
		throw new BadMethodCallException("Clone is not allowed");
	}
	
	public static function getInstance() {
		if (self::$uniqueInstance == NULL) {
			println("Creating unique instance of Chocolate Boiler");
			self::$uniqueInstance = new ChocolateBoiler();
		}
		println("Returning instance of Chocolate Boiler");
		return self::$uniqueInstance;
	}
	
	public function fill() {
		if ($this->isEmpty()) {
			$this->empty = FALSE;
			$this->boiled = FALSE;
			// fill the boiler with a milk/chocolate mixture
		}
	}
	
	public function drain() {
		if (!$this->isEmpty() && $this->isBoiled()) {
			// drain the boiled milk and chocolate
			$this->empty = TRUE;
		}
	}
	
	public function boil() {
		if (!$this->isEmpty() && !$this->isBoiled()) {
			// bring the contents to a boil
			$this->boiled = TRUE;
		}
	}
	
	public function isEmpty() {
		return $this->empty;
	}
	
	public function isBoiled() {
		return $this->boiled;
	}
}
?>