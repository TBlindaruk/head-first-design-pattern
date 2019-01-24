<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\Duck;

use Maksi\HeadFirstDesignPattern\Strategy\Example1\Duck;
use Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior\FlyWithWings;
use Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior\Quack;

/**
 * Class MallardDuck
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1
 */
class MallardDuck extends Duck
{
    /**
     * MallardDuck constructor.
     */
    public function __construct()
    {
        parent::__construct(new FlyWithWings(), new Quack());
    }

    /**
     * @return string
     */
    public function display(): string
    {
        return 'MallardDuck';
    }
}
