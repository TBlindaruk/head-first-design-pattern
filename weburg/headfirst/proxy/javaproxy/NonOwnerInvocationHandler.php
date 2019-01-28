<?php
require_once "java/InvocationHandler.php";

class NonOwnerInvocationHandler implements InvocationHandler {
	/**
	 * @var PersonBean
	 */
	protected $person;

	public function __construct(PersonBean $person) {
		$this->person = $person;
	}

	public function invoke($methodName, array $methodArguments) {
		$reflectionMethod = new ReflectionMethod($this->person, $methodName);
		
		if (substr($methodName, 0, 3) == "get") {
			return $reflectionMethod->invokeArgs($this->person, $methodArguments);
		} else if ($methodName == "setHotOrNotRating") {
			return $reflectionMethod->invokeArgs($this->person, $methodArguments);
		} else if (substr($methodName, 0, 3) == "set") {
			throw new BadMethodCallException("Illegal access");
		}
		return NULL;
	}
}
?>