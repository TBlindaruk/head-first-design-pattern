<?php
require_once "custom/mvc/Model.php";

abstract class FileModel implements Model {
	private $className;
	private $fileName;
	private $dataPath;
	
	public function __construct($dataPath) {
		$this->className = get_class($this);
		$this->fileName = $this->className . ".data";
		$this->dataPath = $dataPath . DIRECTORY_SEPARATOR . $this->fileName;
	}
	
	public function save() {
		file_put_contents($this->dataPath, serialize($this));
	}
	
	public function load() {
		if (file_exists($this->dataPath)) {
			$objectData = file_get_contents($this->dataPath);
			$object = unserialize($objectData);
			
			// Object from storage
			$reflectionClassSaved = new ReflectionClass($object);
			$reflectionClassThis = new ReflectionClass($this);
			
			$classMethodsSaved = $reflectionClassSaved->getMethods(ReflectionMethod::IS_PUBLIC);
			
			/*
			 * For every getter in the saved object, pass its value to this
			 * object's setter.
			 */
			foreach ($classMethodsSaved as $classMethodSaved) {
				if (substr($classMethodSaved->getName(), 0, 3) == "get") {
					$classMethodThis = $reflectionClassThis->getMethod("set" . substr($classMethodSaved->getName(), 3));
					
					$classMethodThis->invoke($this, $classMethodSaved->invoke($object));
				}
			}
		}
	}
}
?>