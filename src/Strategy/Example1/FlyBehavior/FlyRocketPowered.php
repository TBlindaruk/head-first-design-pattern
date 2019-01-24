<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior;

/**
 * Class FlyRocketPowered
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior
 */
class FlyRocketPowered implements FlyBehavior
{
    /**
     * @return string
     */
    public function fly(): string
    {
        return 'I`m flying with a rocket!';
    }
}