<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory;

/**
 * Class PizzaStore
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory
 */
class PizzaStore
{
    /**
     * @var SimplePizzaFactory
     */
    private $factory;

    /**
     * PizzaStore constructor.
     *
     * @param SimplePizzaFactory $factory
     */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param $type
     *
     * @return Pizza
     * @throws CreatePizzaException
     */
    public function orderPizza($type): Pizza
    {
        $pizza = $this->factory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
