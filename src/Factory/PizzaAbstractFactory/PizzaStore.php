<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory;

/**
 * Class PizzaStore
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory
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
     * @param $type
     *
     * @return Pizza
     */
    public function orderPizza($type): Pizza
    {
        $pizza = $this->createPizza($type);
        echo '--- Making a ' . $pizza->getName() . ' ---';
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
