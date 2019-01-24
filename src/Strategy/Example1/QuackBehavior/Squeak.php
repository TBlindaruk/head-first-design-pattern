<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior;

/**
 * Class Squeak
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior
 */
class Squeak implements QuackBehavior
{
    /**
     * @return string
     */
    public function quack(): string
    {
        return 'squeak';
    }
}
