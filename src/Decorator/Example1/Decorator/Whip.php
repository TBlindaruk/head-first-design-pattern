<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Decorator\Example1\Decorator;

use Maksi\HeadFirstDesignPattern\Decorator\Example1\Beverage;

/**
 * Class Whip
 *
 * @package Maksi\HeadFirstDesignPattern\Decorator\Example1\Decorator
 */
class Whip extends Beverage
{
    /**
     * @var Beverage
     */
    private $beverage;

    /**
     * Whip constructor.
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
