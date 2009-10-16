<?php
class MiniDuckSimulator1 {
	public static function main(array $args = array()) {
		$mallard = new MallardDuck();
		$mallard->performQuack();
		$mallard->performFly();
		
		$model = new ModelDuck();
		$model->performFly();
		$model->setFlyBehavior(new FlyRocketPowered());
		$model->performFly();
	}
}
?>