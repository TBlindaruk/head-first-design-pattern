<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior;

/**
 * Class Quack
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior
 */
class Quack implements QuackBehavior
{
    /**
     * @return string
     */
    public function quack(): string
    {
        return 'quack';
    }
}
