<?php
class DuckAdapter implements Turkey {
	/**
	 * @var Duck
	 */
	protected $duck;

	public function __construct(Duck $duck) {
		$this->duck = $duck;
	}

	public function gobble() {
		$this->duck->quack();
	}

	public function fly() {
		if (rand(0, 4)  == 0) {
			$this->duck->fly();
		}
	}
}
?>