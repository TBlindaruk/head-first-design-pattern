<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Decorator\Example1\Beverage;

use Maksi\HeadFirstDesignPattern\Decorator\Example1\Beverage;

/**
 * Class HouseBlend
 *
 * @package Maksi\HeadFirstDesignPattern\Decorator\Example1\Beverage
 */
class HouseBlend extends Beverage
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'House Blend Coffee';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return 0.89;
    }
}
