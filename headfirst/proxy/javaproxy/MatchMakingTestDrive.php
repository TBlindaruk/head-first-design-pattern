<?php
require_once "java/Proxy.php";

class MatchMakingTestDrive {
	protected $datingDB = array();

	public static function main(array $args = array()) {
		$test = new MatchMakingTestDrive();
		$test->drive();
	}

	public function __construct() {
		$this->initializeDatabase();
	}

	public function drive() {
		$joe = $this->getPersonFromDatabase("Joe Javabean");
		$ownerProxy = $this->getOwnerProxy($joe);
		println("Name is " . $ownerProxy->getName());
		$ownerProxy->setInterests("bowling, Go");
		println("Interests set from owner proxy");
		try {
			$ownerProxy->setHotOrNotRating(10);
		} catch (Exception $e) {
			println("Can't set rating from owner proxy");
		}
		println("Rating is " . $ownerProxy->getHotOrNotRating());

		$nonOwnerProxy = $this->getNonOwnerProxy($joe);
		println("Name is " . $nonOwnerProxy->getName());
		try {
			$nonOwnerProxy->setInterests("bowling, Go");
		} catch (Exception $e) {
			println("Can't set interests from non owner proxy");
		}
		$nonOwnerProxy->setHotOrNotRating(3);
		println("Rating set from non owner proxy");
		println("Rating is " . $nonOwnerProxy->getHotOrNotRating());
	}

	protected function getOwnerProxy(PersonBean $person) {
		return Proxy::newProxyInstance(new OwnerInvocationHandler($person));
	}

	protected function getNonOwnerProxy(PersonBean $person) {
		return Proxy::newProxyInstance(new NonOwnerInvocationHandler($person));
	}

	protected function getPersonFromDatabase($name) {
		return $this->datingDB[$name];
	}

	protected function initializeDatabase() {
		$joe = new PersonBeanImpl();
		$joe->setName("Joe Javabean");
		$joe->setInterests("cars, computers, music");
		$joe->setHotOrNotRating(7);
		$this->datingDB[$joe->getName()] = $joe;

		$kelly = new PersonBeanImpl();
		$kelly->setName("Kelly Klosure");
		$kelly->setInterests("ebay, movies, music");
		$kelly->setHotOrNotRating(6);
		$this->datingDB[$kelly->getName()] = $kelly;
	}
}
?>