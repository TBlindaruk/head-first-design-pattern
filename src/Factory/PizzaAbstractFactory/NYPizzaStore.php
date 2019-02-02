<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory;

use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Pizza\CheesePizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Pizza\ClamPizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Pizza\PepperoniPizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory\Pizza\VeggiePizza;

/**
 * Class NYPizzaStore
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaAbstractFactory
 */
class NYPizzaStore extends PizzaStore
{
    /**
     * @param string $item
     *
     * @return Pizza
     * @throws CreatePizzaException
     */
    protected function createPizza(string $item): Pizza
    {
        $ingredientFactory = new NYPizzaIngredientFactory();

        switch ($item) {
            case 'cheese':
                return new CheesePizza($ingredientFactory);
            case 'veggie':
                return new VeggiePizza($ingredientFactory);
            case 'clam':
                return new ClamPizza($ingredientFactory);
            case 'pepperoni':
                return new PepperoniPizza($ingredientFactory);
        }

        throw new CreatePizzaException('Pizza type: ' . $item . ' is not support');
    }
}
