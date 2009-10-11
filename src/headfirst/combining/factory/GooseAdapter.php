<?php
class GooseAdapter implements Quackable {
	/**
	 * @var Goose
	 */
	protected $goose;

	public function __construct(Goose $goose) {
		$this->goose = $goose;
	}

	public function quack() {
		$this->goose->honk();
	}

	public function __toString() {
		return "Goose pretending to be a Duck";
	}
}
?>