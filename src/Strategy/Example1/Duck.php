<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Strategy\Example1;

use Maksi\HeadFirstDesignPattern\Strategy\Example1\FlyBehavior\FlyBehavior;
use Maksi\HeadFirstDesignPattern\Strategy\Example1\QuackBehavior\QuackBehavior;

/**
 * Class Duck
 *
 * @package Maksi\HeadFirstDesignPattern\Strategy\Example1
 */
abstract class Duck
{
    /**
     * @var FlyBehavior
     */
    private $flyBehavior;

    /**
     * @var QuackBehavior
     */
    private $quackBehavior;

    /**
     * Duck constructor.
     *
     * @param FlyBehavior   $flyBehavior
     * @param QuackBehavior $quackBehavior
     */
    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    /**
     * @return string
     */
    public function performQuack(): string
    {
        return $this->quackBehavior->quack();
    }

    /**
     * @return string
     */
    public function swim(): string
    {
        return 'swim';
    }

    /**
     * @return string
     */
    abstract public function display(): string;

    /**
     * @return string
     */
    public function performFly(): string
    {
        return $this->flyBehavior->fly();
    }

    /**
     * @param FlyBehavior $flyBehavior
     */
    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param QuackBehavior $quackBehavior
     */
    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}
