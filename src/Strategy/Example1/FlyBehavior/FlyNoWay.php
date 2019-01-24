<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior;

/**
 * Class FlyNoWay
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior
 */
class FlyNoWay implements FlyBehavior
{
    /**
     * @return string
     */
    public function fly(): string
    {
        return 'fly no way';
    }
}
