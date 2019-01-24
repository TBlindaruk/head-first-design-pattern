<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1\Duck;

use Maksi\HeadFirstDesignPattern\Strategy\Example1\Duck;
use Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior\FlyNoWay;
use Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior\Quack;

/**
 * Class ModelDuck
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1
 */
class ModelDuck extends Duck
{
    /**
     * ModelDuck constructor.
     */
    public function __construct()
    {
        parent::__construct(new FlyNoWay(), new Quack());
    }

    /**
     * @return string
     */
    public function display(): string
    {
        return 'ModelDuck';
    }
}
