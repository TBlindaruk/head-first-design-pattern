<?php

use Maksi\HeadFirstDesignPattern\Strategy\Example1\Duck\MallardDuck;
use Maksi\HeadFirstDesignPattern\Strategy\Example1\Duck\ModelDuck;
use Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior\FlyRocketPowered;

require_once '../../../vendor/autoload.php';

echo '----------------------' . PHP_EOL;

$mallard = new MallardDuck();
echo $mallard->performQuack() . PHP_EOL;
echo $mallard->performFly() . PHP_EOL;

echo '----------------------' . PHP_EOL;

$model = new ModelDuck();
echo $model->performFly() . PHP_EOL;
$model->setFlyBehavior(new FlyRocketPowered());
echo $model->performFly() . PHP_EOL;

echo '----------------------' . PHP_EOL;
