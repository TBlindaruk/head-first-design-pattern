<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Decorator\Example1\Beverage;

use Maksi\HeadFirstDesignPattern\Decorator\Example1\Beverage;

/**
 * Class Espresso
 *
 * @package Maksi\HeadFirstDesignPattern\Decorator\Example1\Beverage
 */
class Espresso extends Beverage
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Espresso';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return 1.99;
    }
}
