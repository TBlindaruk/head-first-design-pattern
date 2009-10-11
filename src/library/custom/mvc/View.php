<?php
require_once "custom/mvc/ModelInvocationHandler.php";

class View {
	private $attributes = array();
	private $viewName = "";
	private $viewPath = "";
	
	public function __construct($viewName) {
		$this->viewName = $viewName;
	}
	
	public function setAttribute($name, $value) {
		$this->attributes[$name] = $value;
	}
	
	public function render() {
		foreach ($this->attributes as $attributeName => $attributeValue) {
			/*
			 * Wrap objects given to the view in an invocation handler to guard
			 * against the view calling unauthoried backend object methods and
			 * to simulate JSP bean behavior. Note that this approach is overly
			 * simplistic, as arrays of objects won't be caught.
			 */
			if (is_object($attributeValue)) {
				$$attributeName = new ModelInvocationHandler($attributeValue);
			} else {
				$$attributeName = $attributeValue;
			}
		}
		include $this->viewPath . DIRECTORY_SEPARATOR . $this->viewName . ".php";
	}
	
	public function setViewPath($viewPath) {
		$this->viewPath = $viewPath;
	}
}
?>