<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza;

use Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\Pizza;

/**
 * Class ChicagoStyleCheesePizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza
 */
class ChicagoStyleCheesePizza extends Pizza
{
    /**
     * ChicagoStyleCheesePizza constructor.
     */
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;
    }
}
