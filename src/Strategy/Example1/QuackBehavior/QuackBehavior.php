<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior;

/**
 * Interface QuackBehavior
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior
 */
interface QuackBehavior
{
    /**
     * @return string
     */
    public function quack(): string;
}
