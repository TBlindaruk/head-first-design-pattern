<?php
require_once "../application/bootstrap.php";
require_once "custom/mvc/Dispatcher.php";

$dispatcher = new Dispatcher();
$dispatcher->setControllerPath(APPLICATION_PATH . DIRECTORY_SEPARATOR . "controllers");
$dispatcher->setDefaultControllerName("DJView");
$dispatcher->dispatch();
?>