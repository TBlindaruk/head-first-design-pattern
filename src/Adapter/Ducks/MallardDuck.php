<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Adapter\Ducks;

/**
 * Class MallardDuck
 *
 * @package Maksi\HeadFirstDesignPattern\Adapter\Ducks
 */
class MallardDuck implements Duck
{
    public function quack(): void
    {
        echo 'Quack' . PHP_EOL;
    }

    public function fly(): void
    {
        echo "I'm flying" . PHP_EOL;
    }
}
