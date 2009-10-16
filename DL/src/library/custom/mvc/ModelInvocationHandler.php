<?php
/**
 * This simple invocation handler forces any property requests on the object to
 * go through an explicit getter in the proxied object. It allows the PHP view
 * to reference model properties on objects directly just like JSP beans, but
 * does not permit the view to call any other methods. This prevents the view
 * from hitting the backend of the application.
 */
class ModelInvocationHandler {
	/**
	 * @var object
	 */
	protected $object;

	public function __construct($object) {
		$this->object = $object;
	}

	public function __get($name) {
		$methodName = "get" . $name;
		$reflectionMethod = new ReflectionMethod($this->object, $methodName);
		return $reflectionMethod->invoke($this->object, array());
	}
}
?>