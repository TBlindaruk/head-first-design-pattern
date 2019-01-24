<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior;

/**
 * Class FlyWithWings
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior
 */
class FlyWithWings implements FlyBehavior
{
    /**
     * @return string
     */
    public function fly(): string
    {
        return 'I can fly';
    }
}
