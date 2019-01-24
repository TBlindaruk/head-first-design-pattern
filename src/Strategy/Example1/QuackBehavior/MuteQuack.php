<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior;

/**
 * Class MuteQuack
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior
 */
class MuteQuack implements QuackBehavior
{
    /**
     * @return string
     */
    public function quack(): string
    {
        return 'MuteQuack';
    }
}
