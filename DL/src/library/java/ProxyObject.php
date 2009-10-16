<?php
require_once "java/InvocationHandler.php";

class ProxyObject {
	/**
	 * @var InvocationHandler
	 */
	protected $invocationHandler;
	
	public function __construct(InvocationHandler $invocationHandler) {
		$this->invocationHandler = $invocationHandler;
	}
	
	/**
	 * Represents the methods called on the proxy object
	 * 
	 * @param string $methodName
	 * @param array $methodArguments
	 * @return mixed The invocationHandler's response
	 */
	public function __call($methodName, array $methodArguments) {
		return $this->invocationHandler->invoke($methodName, $methodArguments);
	}
}
?>