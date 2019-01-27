<?php
declare(strict_types = 1);

use Maksi\HeadFirstDesignPattern\Decorator\Example2\Beverage\DarkRoast;
use Maksi\HeadFirstDesignPattern\Decorator\Example2\Beverage\Espresso;
use Maksi\HeadFirstDesignPattern\Decorator\Example2\Beverage\HouseBlend;
use Maksi\HeadFirstDesignPattern\Decorator\Example2\Decorator\Mocha;
use Maksi\HeadFirstDesignPattern\Decorator\Example2\Decorator\Soy;
use Maksi\HeadFirstDesignPattern\Decorator\Example2\Decorator\Whip;

require_once '../../../vendor/autoload.php';

$beverage = new Espresso();
echo $beverage->getDescription() . ' $' . $beverage->cost() . ', SIZE: ' . $beverage->getSize() . PHP_EOL;
echo '----------------------------' . PHP_EOL;

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . ' $' . $beverage2->cost() . ', SIZE: ' . $beverage2->getSize() . PHP_EOL;
echo '----------------------------' . PHP_EOL;

$beverage3 = new HouseBlend(HouseBlend::GRANDE);
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . ' $' . $beverage3->cost() . ', SIZE: ' . $beverage3->getSize() . PHP_EOL;
echo '----------------------------' . PHP_EOL;

