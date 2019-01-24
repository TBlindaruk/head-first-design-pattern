<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior;

/**
 * Interface FlyBehavior
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior
 */
interface FlyBehavior
{
    /**
     * @return string
     */
    public function fly():string ;
}
