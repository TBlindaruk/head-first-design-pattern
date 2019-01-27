<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Decorator\Example1;

/**
 * Class Beverage
 *
 * @package Maksi\HeadFirstDesignPattern\Decorator\Example1
 */
abstract class Beverage
{
    /**
     * @return string
     */
    abstract public function getDescription(): string;

    /**
     * @return float
     */
    abstract public function cost(): float;
}
