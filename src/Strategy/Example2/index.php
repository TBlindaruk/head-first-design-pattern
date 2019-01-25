<?php

use Maksi\HeadFirstDesignPattern\Strategy\Example2\Product;
use Maksi\HeadFirstDesignPattern\Strategy\Example2\StrategyCollection\WeekendStrategyCollection;
use Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxCalculator;
use Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy\LowTaxStrategy;
use Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy\NormalTaxStrategy;
use Maksi\HeadFirstDesignPattern\Strategy\Example2\TaxStrategy\NullTaxStrategy;

require_once '../../../vendor/autoload.php';

echo '----------------------' . PHP_EOL;

$tax = new TaxCalculator(
    new WeekendStrategyCollection(new NullTaxStrategy(), new LowTaxStrategy(), new NormalTaxStrategy())
);

$normalTax = new Product('10%', 10);
echo $tax->calculateTax($normalTax) . PHP_EOL;
echo '----------------------' . PHP_EOL;

$lowTax = new Product('1%', 10000001);
echo $tax->calculateTax($lowTax) . PHP_EOL;
echo '----------------------' . PHP_EOL;

$nullTax = new Product('null', 1000000001);
echo $tax->calculateTax($nullTax) . PHP_EOL;
echo '----------------------' . PHP_EOL;

