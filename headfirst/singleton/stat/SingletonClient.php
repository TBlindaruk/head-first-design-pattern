<?php
class SingletonClient {
	public static function main(array $args = array()) {
		$singleton = Singleton::getInstance();
	}
}
?>