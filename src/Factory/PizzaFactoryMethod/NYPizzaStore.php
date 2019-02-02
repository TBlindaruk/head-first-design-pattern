<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod;

use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\NYPizza\NYStyleCheesePizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\NYPizza\NYStyleClamPizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\NYPizza\NYStylePepperoniPizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\NYPizza\NYStyleVeggiePizza;

/**
 * Class NYPizzaStore
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod
 */
class NYPizzaStore extends PizzaStore
{
    /**
     * @param string $item
     *
     * @return Pizza
     * @throws CreatePizzaException
     */
    public function createPizza(string $item): Pizza
    {
        switch ($item) {
            case 'cheese':
                return new NYStyleCheesePizza();
            case 'veggie':
                return new NYStyleVeggiePizza();
            case 'clam':
                return new NYStyleClamPizza();
            case 'pepperoni':
                return new NYStylePepperoniPizza();
        }
        throw new CreatePizzaException('Pizza type: ' . $item . ' is not support');
    }
}
