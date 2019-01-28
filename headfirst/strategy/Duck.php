<?php
abstract class Duck {
	/**
	 * @var FlyBehavior
	 */
	protected $flyBehavior;
	/**
	 * @var QuackBehavior
	 */
	protected $quackBehavior;
	
	public function setFlyBehavior(FlyBehavior $fb) {
		$this->flyBehavior = $fb;
	}
	
	public function setQuackBehavior(QuackBehavior $qb) {
		$this->quackBehavior = $qb;
	}
	
	public function performQuack() {
		$this->quackBehavior->quack();
	}
	
	public function performFly() {
		$this->flyBehavior->fly();
	}
	
	abstract public function display();
	
	public function swim() {
		println("All ducks float, even decoys!");
	}
}
?>