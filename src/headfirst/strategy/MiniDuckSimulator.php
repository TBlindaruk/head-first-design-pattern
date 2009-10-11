<?php
class MiniDuckSimulator {
	public static function main(array $args = array()) {
		$mallard = new MallardDuck();
		$rubberDuckie = new RubberDuck();
		$decoy = new DecoyDuck();
		
		$model = new ModelDuck();
		
		$mallard->performQuack();
		$rubberDuckie->performQuack();
		$decoy->performQuack();
		
		$model->performFly();	
		$model->setFlyBehavior(new FlyRocketPowered());
		$model->performFly();
	}
}
?>