<?php
require_once "custom/mvc/HttpRequest.php";

abstract class Controller {
	/**
	 * @var HttpRequest
	 */
	protected $req;
	
	public final function __construct() {
		$this->req = new HttpRequest();
	}
	
	/**
	 * Called by the dispatcher just after instantiation; serves as a
	 * constructor.
	 * 
	 * @return void
	 */
	public function init() {}
	
	/**
	 * @return unknown_type
	 */
	public function indexAction() {}
	
	/**
	 * This method exists so that unknown methods will call the default method
	 * 
	 * @param array $methodName
	 * @param $args
	 * @return unknown_type
	 */
	public function __call($methodName, array $args) {
		return $this->indexAction();
	}
}
?>