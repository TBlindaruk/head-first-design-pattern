<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Decorator\Example1\Decorator;

use Maksi\HeadFirstDesignPattern\Decorator\Example1\Beverage;

/**
 * Class Soy
 *
 * @package Maksi\HeadFirstDesignPattern\Decorator\Example1\Decorator
 */
class Soy extends Beverage
{
    /**
     * @var Beverage
     */
    private $beverage;

    /**
     * Mocha constructor.
     *
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return $this->beverage->cost() + 0.21;
    }
}
