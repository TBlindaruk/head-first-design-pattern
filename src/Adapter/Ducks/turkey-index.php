<?php

use Maksi\HeadFirstDesignPattern\Adapter\Ducks\DuckAdapter;
use Maksi\HeadFirstDesignPattern\Adapter\Ducks\MallardDuck;

require_once '../../../vendor/autoload.php';

$duck = new MallardDuck();
$duckAdapter = new DuckAdapter($duck);
for ($i = 0; $i<10;++$i){
    echo 'The DuckAdapter says...' . PHP_EOL;
    $duckAdapter->gobble();
    $duckAdapter->fly();
}
