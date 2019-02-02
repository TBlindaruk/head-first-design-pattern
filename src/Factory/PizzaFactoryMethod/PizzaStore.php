<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod;

/**
 * Class PizzaStore
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod
 */
abstract class PizzaStore
{
    /**
     * @param string $item
     *
     * @return Pizza
     */
    abstract protected function createPizza(string $item): Pizza;

    /**
     * @param string $type
     *
     * @return Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        echo '--- Making a ' . $pizza->getName() . ' ---' . PHP_EOL;
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
