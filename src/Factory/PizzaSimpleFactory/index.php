<?php
declare(strict_types = 1);

use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\PizzaStore;
use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\SimplePizzaFactory;

require_once '../../../vendor/autoload.php';

$factory = new SimplePizzaFactory();
$store = new PizzaStore($factory);

$pizza = $store->orderPizza('cheese');
echo 'We ordered a ' . (string) $pizza . PHP_EOL;
echo '---------------------' . PHP_EOL;

$pizza = $store->orderPizza('veggie');
echo 'We ordered a ' . (string) $pizza . PHP_EOL;
