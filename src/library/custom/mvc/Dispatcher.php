<?php
require_once "custom/mvc/HttpRequest.php";

class Dispatcher {
	private $defaultControllerName = "index";
	private $controllerPath = "";
	
	public function dispatch() {
		$controllerClassName = "";
		
		if (HttpRequest::getParam("controller") !== NULL) {
			$controllerClassName = HttpRequest::getParam("controller") . "Controller";
		}
		
		$controllerFile = $this->controllerPath . DIRECTORY_SEPARATOR . $controllerClassName . ".php";

		if ($controllerClassName == "" || !file_exists($controllerFile)) {
			$controllerClassName = $this->defaultControllerName . "Controller";
			$controllerFile = $this->controllerPath . DIRECTORY_SEPARATOR . $controllerClassName . ".php";
		}
		
		require_once $controllerFile;
		
		$controller = new $controllerClassName();
		$controller->init();
		
		$actionMethod = NULL;
		
		if (HttpRequest::getParam("action") !== NULL) {
			$actionMethod = HttpRequest::getParam("action") . "Action";
		}
		
		if ($actionMethod !== NULL) {
			$view = $controller->$actionMethod();
		} else {
			$view = $controller->indexAction();
		}
		
		if ($view instanceof View) {
			$view->render();
		}
	}
	
	public function setDefaultControllerName($defaultControllerName) {
		$this->defaultControllerName = $defaultControllerName;
	}
	
	public function setControllerPath($controllerPath) {
		$this->controllerPath = $controllerPath;
	}
}
?>