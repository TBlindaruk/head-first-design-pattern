<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Facade\HomeTheater;

class PopcornPopper {
	protected $description;
	
	public function __construct($description) {
		$this->description = $description;
	}

	public function on() {
		println($this->description . " on");
	}

	public function off() {
		println($this->description . " off");
	}

	public function pop() {
		println($this->description . " popping popcorn!");
	}

	public function __toString() {
		return $this->description;
	}
}
?>