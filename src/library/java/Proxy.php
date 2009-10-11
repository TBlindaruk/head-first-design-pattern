<?php
require_once "java/InvocationHandler.php";
require_once "java/ProxyObject.php";

class Proxy {
	public static function newProxyInstance(InvocationHandler $invocationHandler) {
		return new ProxyObject($invocationHandler);
	}
}
?>