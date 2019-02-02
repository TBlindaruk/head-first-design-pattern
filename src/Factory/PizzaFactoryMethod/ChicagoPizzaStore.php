<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod;

use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza\ChicagoStyleCheesePizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza\ChicagoStyleClamPizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza\ChicagoStylePepperoniPizza;
use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza\ChicagoStyleVeggiePizza;

/**
 * Class ChicagoPizzaStore
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod
 */
class ChicagoPizzaStore extends PizzaStore
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
                return new ChicagoStyleCheesePizza();
            case 'veggie':
                return new ChicagoStyleVeggiePizza();
            case 'clam':
                return new ChicagoStyleClamPizza();
            case 'pepperoni':
                return new ChicagoStylePepperoniPizza();
        }

        throw new CreatePizzaException('Pizza type: ' . $item . ' is not support');
    }
}
