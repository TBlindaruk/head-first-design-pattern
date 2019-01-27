<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Decorator\Example2\Decorator;

use Maksi\HeadFirstDesignPattern\Decorator\Example2\CondimentDecorator;

/**
 * Class Whip
 *
 * @package Maksi\HeadFirstDesignPattern\Decorator\Example1\Decorator
 */
class Whip extends CondimentDecorator
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return $this->beverage->cost() + 0.31;
    }
}
