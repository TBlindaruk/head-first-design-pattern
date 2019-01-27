<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Decorator\Example2;

/**
 * Class Beverage
 *
 * @package Maksi\HeadFirstDesignPattern\Decorator\Example1
 */
abstract class Beverage
{
    public const TALL = 'tall';
    public const GRANDE = 'grande';
    public const VENDI = 'vendi';

    private $size;

    /**
     * Beverage constructor.
     *
     * @param string $size
     */
    public function __construct(string $size = self::TALL)
    {
        // TODO add check for size
        $this->size = $size;
    }

    /**
     * @return string
     */
    abstract public function getDescription(): string;

    /**
     * @return float
     */
    abstract public function cost(): float;

    /**
     * @return string
     */
    public function getSize():string
    {
        return $this->size;
    }
}
