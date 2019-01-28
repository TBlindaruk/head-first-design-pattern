<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory;

use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza\CheesePizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza\ClamPizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza\PepperoniPizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory\Pizza\VeggiePizza;

/**
 * Class SimplePizzaFactory
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaSimpleFactory
 */
class SimplePizzaFactory
{
    /**
     * @param $type
     *
     * @return Pizza
     * @throws CreatePizzaException
     */
    public function createPizza($type): Pizza
    {
        switch ($type) {
            case 'cheese':
                return new CheesePizza();
            case 'pepperoni':
                return new PepperoniPizza();
            case 'clam':
                return new ClamPizza();
            case 'veggie':
                return new VeggiePizza();
        }

        throw new CreatePizzaException('Pizza type: ' . $type . ' is not support');
    }
}
