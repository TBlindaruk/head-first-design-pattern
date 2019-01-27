<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Decorator\Example2\Beverage;

use Maksi\HeadFirstDesignPattern\Decorator\Example2\Beverage;

/**
 * Class DarkRoast
 *
 * @package Maksi\HeadFirstDesignPattern\Decorator\Example1\Beverage
 */
class DarkRoast extends Beverage
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Dark Roast Coffee';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return 1.12;
    }
}
