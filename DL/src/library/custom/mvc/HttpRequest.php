<?php
class HttpRequest {
	public static function getParam($name) {
		if (NULL !== $param = self::getGetParam($name)) {
			return $param;
		} else if (NULL !== $param = self::getPostParam($name)) {
			return $param;
		} else {
			return NULL;
		}
	}
	
	public static function getGetParam($name) {
		if (isset($_GET[$name])) {
			return $_GET[$name];
		} else {
			return NULL;
		}
	}
	
	public static function getPostParam($name) {
		if (isset($_POST[$name])) {
			return $_POST[$name];
		} else {
			return NULL;
		}
	}
	
	public static function getCookie($name) {
		if (isset($_COOKIE[$name])) {
			return $_COOKIE[$name];
		} else {
			return NULL;
		}
	}
}
?>