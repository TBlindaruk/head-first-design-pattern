<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Facade\HomeTheater;

class Screen {
	protected $description;
	
	public function __construct($description) {
		$this->description = $description;
	}

	public function up() {
		println($this->description . " going up");
	}

	public function down() {
		println($this->description . " going down");
	}

	public function __toString() {
		return $this->description;
	}
}
?>