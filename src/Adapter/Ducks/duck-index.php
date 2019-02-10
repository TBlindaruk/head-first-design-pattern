<?php

use Maksi\HeadFirstDesignPattern\Adapter\Ducks\MallardDuck;
use Maksi\HeadFirstDesignPattern\Adapter\Ducks\TurkeyAdapter;
use Maksi\HeadFirstDesignPattern\Adapter\Ducks\WildTurkey;

require_once '../../../vendor/autoload.php';

$duck = new MallardDuck();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo 'The turkey says...' . PHP_EOL;
$turkey->gobble();
$turkey->fly();
echo '---------------------' . PHP_EOL;

echo 'The duck says...' . PHP_EOL;
$duck->quack();
$duck->fly();
echo '---------------------' . PHP_EOL;


echo 'The turkey adapter says ... ' . PHP_EOL;
$turkeyAdapter->quack();
$turkeyAdapter->fly();
echo '---------------------' . PHP_EOL;

