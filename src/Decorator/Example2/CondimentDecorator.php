<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Decorator\Example2;

/**
 * Class CondimentDecorator
 *
 * @package Maksi\HeadFirstDesignPattern\Decorator\Example2
 */
abstract class CondimentDecorator extends Beverage
{
    /**
     * @var Beverage
     */
    protected $beverage;

    /**
     * CondimentDecorator constructor.
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
    public function getSize(): string
    {
        return $this->beverage->getSize();
    }
}
